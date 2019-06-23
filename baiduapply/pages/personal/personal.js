const app = getApp()
const event = require('../../utils/event.js')

Page({
    data: {

    },
    onLoad: function () {
        // 监听页面加载的生命周期函数
    },
    onReady: function() {
        // 监听页面初次渲染完成的生命周期函数
    },
    onShow: function() {
        // 监听页面显示的生命周期函数
        let _this = this
        if (_this.initData ()) {
            // 如果globalData还没被初始化，就监听初始化完成事件
            event.on('globalDataChanged', function initData () {
                event.on('globalDataChanged', initData)
                _this.initData ()
            })
        }
    },
    onHide: function() {
        // 监听页面隐藏的生命周期函数
    },
    onUnload: function() {
        // 监听页面卸载的生命周期函数
    },
    onPullDownRefresh: function() {
        // 监听用户下拉动作
    },
    onReachBottom: function() {
        // 页面上拉触底事件的处理函数
    },
    onShareAppMessage: function () {
        // 用户点击右上角转发
    },
    initData () {
        let basedata = app.globalData.basedata
        if (basedata == null) {
            return true
        }
        let option = {
            title: basedata.title + '_关于我们',
            keywords: basedata.title,
            description: basedata.description,
            releaseDate: '2019-06-22 12:00:00',
            image: 'https://www.worldflying.cn/imgs/phone/bg1.png'
        }
        swan.setPageInfo (option)
        return false
    }
});