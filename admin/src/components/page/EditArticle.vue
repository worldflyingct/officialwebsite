<template>
    <div>
        <div class="crumbs">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item><i class="el-icon-lx-calendar"></i> 文章编辑</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <div class="container">
            <div class="form-box">
                <el-form ref="form" :model="form" label-width="80px">
                    <el-form-item label="文章标题">
                        <el-input v-model="form.title"></el-input>
                    </el-form-item>
                    <el-form-item label="文章简介">
                        <el-input v-model="form.desc"></el-input>
                    </el-form-item>
                    <el-form-item label="文章类">
                        <el-select v-model="form.type" placeholder="请选择">
                            <el-option label="公司动态" :value="1"></el-option>
                            <el-option label="媒体报道" :value="2"></el-option>
                            <el-option label="行业资讯" :value="3"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="发布时间">
                        <el-col :span="11">
                            <el-date-picker type="datetime" placeholder="选择发布时间" v-model="form.publishtime" style="width: 100%;"></el-date-picker>
                        </el-col>
                    </el-form-item>
                    <el-form-item label="是否发布">
                        <el-switch v-model="form.status"></el-switch>
                    </el-form-item>
                    <el-form-item label="文章图片">
                        <img :src="cronImg" class="pre-img" @click="SelectImg">
                    </el-form-item>
                    <el-form-item label="文章内容">
                        <textarea id="editor" style="width: 1100px; height: 300px"></textarea>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="OnSubmit">表单提交</el-button>
                    </el-form-item>
                </el-form>
            </div>

            <el-dialog title="裁剪图片" :visible.sync="dialogVisible" width="80%">
                <vue-cropper ref='cropper' :src="cronsrc" :aspectRatio="30/17" dragMode="crop" style="width:100%;height:300px;"></vue-cropper>
                <span slot="footer" class="dialog-footer">
                    <el-button @click="dialogVisible = false">取 消</el-button>
                    <el-button type="primary" @click="cropImage">确 定</el-button>
                </span>
            </el-dialog>
        </div>
    </div>
</template>

<script>
let defaultImg = require('@/assets/img/defaultImg.png')
import VueCropper  from 'vue-cropperjs'
import func from '@/components/common/functions'
export default {
    name: 'baseform',
    data: function(){
        return {
            form: {
                articleid: 0,
                title: '',
                desc: '',
                publishtime: null,
                status: true,
                type: 1,
                file: null
            },
            dialogVisible: false,
            cronsrc: defaultImg,
            cronImg: defaultImg,
            ue: null
        }
    },
    components: {
        VueCropper
    },
    created () {
        let _this = this
        if (_this.$route.query.hasOwnProperty('articleid')) {
            _this.form.articleid = _this.$route.query.articleid
        }
    },
    mounted () {
        let _this = this
        _this.ue = UE.getEditor('editor')
    },
    methods: {
        async cropImage () {
            let _this = this
            _this.$refs.cropper.getCroppedCanvas({width: 300, height: 170}).toBlob(function (blob) {
                _this.form.file = new Blob([blob], {"type": "image/png"})
                if (_this.cronImg != defaultImg) {
                    URL.revokeObjectURL(_this.cronImg)
                }
                _this.cronImg = URL.createObjectURL(blob)
            })
            _this.dialogVisible = false
        },
        async SelectImg () {
            let _this = this
            let input = document.createElement('input')
            input.type = 'file'
            input.accept = 'image/*'
            input.onchange = function () {
                let file = input.files[0]
                _this.dialogVisible = true
                if (_this.cronsrc != defaultImg) {
                    URL.revokeObjectURL(_this.cronsrc)
                }
                _this.cronsrc = URL.createObjectURL(file)
                _this.$refs.cropper && _this.$refs.cropper.replace(_this.cronsrc)
            }
            let e = new MouseEvent('click')
            input.dispatchEvent(e)
        },
        async OnSubmit () {
            let _this = this
            let formdata = new FormData()
            formdata.append ('token', _this.$root.token)
            formdata.append ('articleid', _this.form.articleid)
            formdata.append ('title', _this.form.title)
            formdata.append ('desc', _this.form.desc)
            formdata.append ('publishtime', _this.form.publishtime)
            formdata.append ('status', _this.form.status)
            formdata.append ('type', _this.form.type)
            formdata.append ('content', _this.ue.getContent())
            formdata.append ('file', _this.form.file)
            let res = await func.ajax(APIADDR + '/index.php?do=api&act=editarticle', formdata)
            let obj = JSON.parse(res)
            if (obj.errcode == 0) {
                _this.$message.success('新建文章成功')
                _this.$router.go(-1)
            } else if (obj.errcode === 2000) {
                _this.$message.error(obj.errmsg)
                sessionStorage.clear()
                _this.$router.push('/login')
            } else {
                _this.$message.error(obj.errmsg)
            }
        }
    },
    beforeDestroy() {
        let _this = this
        if (_this.cronsrc != defaultImg) {
            URL.revokeObjectURL(_this.cronsrc)
        }
        if (_this.cronImg != defaultImg) {
            URL.revokeObjectURL(_this.cronImg)
        }
        _this.ue.destroy()
    }
}
</script>

<style scoped>
.pre-img{
    width: 300px;
    height: 170px;
    background: #f8f8f8;
    border: 1px solid #eee;
    border-radius: 5px;
}
</style>