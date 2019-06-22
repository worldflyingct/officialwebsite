const app = getApp()

Component({
    properties: {
        foot: { // 属性名
            type: String, // 类型（必填），目前接受的类型包括：String, Number, Boolean, Object, Array, null（表示任意类型）
            value: 'val', // 属性初始值（必填）
            observer: function(newVal, oldVal) {
                // 属性被改变时执行的函数（可选）
            }
        }
    },

    data: {
        mobile: '',
        QQ: '',
        email: '',
        address: ''
    }, // 私有数据，可用于模版渲染

    // 生命周期函数，可以为函数，或一个在methods段中定义的方法名
    created: function () {
        let basedata = app.globalData.basedata
        this.setData({
            mobile: basedata.mobile,
            QQ: basedata.QQ,
            email: basedata.email,
            address: basedata.address
        })
    },
    attached: function () {},
    detached: function () {}
});