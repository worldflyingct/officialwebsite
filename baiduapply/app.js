/**
 * @file app.js
 * @author swan
 */

/* globals swan */

const event = require('./utils/event.js')

App({
    globalData: {
        apiserver: 'https://www.worldflying.cn',
        basedata: null
    },
    onLaunch(options) {
        let _this = this
        swan.request({
            url: _this.globalData.apiserver + '/index.php?do=apigetbasedata',
            method: 'GET',
            success: function (res) {
                _this.globalData.basedata = res.data;
                event.emit('globalDataChanged')                
            }
        });
        // do something when launch
        // 添加到我的小程序引导，参见文档： http://smartprogram.baidu.com/docs/design/component/guide_add/
        if (swan.canIUse('showFavoriteGuide')) {
            swan.showFavoriteGuide({
                type: 'bar',
                content: '一键添加到我的小程序',
                success(res) {
                    console.log('添加成功：', res);
                },
                fail(err) {
                    console.log('添加失败：', err);
                }
            });
        }
    },
    onShow(options) {
        // do something when show
    },
    onHide() {
        // do something when hide
    }
});
