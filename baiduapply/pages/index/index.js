/**
 * @file index.js
 * @author swan
 */
const app = getApp()
const event = require('../../utils/event.js')

Page({
    data: {
        userInfo: {},
        canIUse: swan.canIUse('button.open-type.getUserInfo'),
        active:1
    },
    onLoad() {
        // 监听页面加载的生命周期函数
    },
    onShow () {
        let _this = this
        if (_this.initData ()) {
            // 如果globalData还没被初始化，就监听初始化完成事件
            event.on('globalDataChanged', function initData () {
                event.on('globalDataChanged', initData)
                _this.initData ()
            })
        }
    },
    initData () {
        let basedata = app.globalData.basedata
        if (basedata == null) {
            return true
        }
        let option = {
            title: basedata.title + '_首页',
            keywords: basedata.title,
            description: basedata.description,
            releaseDate: '2019-06-22 12:00:00',
            image: 'https://www.worldflying.cn/imgs/phone/bg1.png'
        }
        swan.setPageInfo (option)
        return false
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
    }
})
