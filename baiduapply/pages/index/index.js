/**
 * @file index.js
 * @author swan
 */
const app = getApp()

Page({
    data: {
        userInfo: {},
        hasUserInfo: false,
        canIUse: swan.canIUse('button.open-type.getUserInfo'),
        active:1
    },
    onLoad() {
        // 监听页面加载的生命周期函数
    },
    onShow () {
        let _this = this
        let basedata = app.globalData.basedata
        let option = {
            title: basedata.title + '_首页',
            keywords: basedata.title,
            description: basedata.description,
            releaseDate: '2019-06-22 12:00:00',
            image: 'https://www.worldflying.cn/imgs/phone/bg1.png'
        }
        swan.setPageInfo (option)
    },
    huang(e){
        console.log(e.currentTarget.dataset.index)
        this.setData({
            active:e.currentTarget.dataset.index
        })
    },
    tiao(e){
        swan.navigateTo({
            url: e.target.dataset.url
        });
    },
    getUserInfo(e) {
        swan.login({
            success: () => {
                swan.getUserInfo({
                    success: (res) => {
                        this.setData({
                            userInfo: res.userInfo,
                            hasUserInfo: true
                        });
                    },
                    fail: () => {
                        this.setData({
                            userInfo: e.detail.userInfo,
                            hasUserInfo: true
                        });
                    }
                });
            },
            fail: () => {
                swan.showModal({
                    title: '未登录',
                    showCancel: false
                });
            }
        });
    }
})
