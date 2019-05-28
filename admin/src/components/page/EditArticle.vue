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
                        <el-input v-model="form.name"></el-input>
                    </el-form-item>
                    <el-form-item label="文章简介">
                        <el-input v-model="form.desc"></el-input>
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
                        <img :src="defaultImg" class="pre-img" @click="SelectImg">
                    </el-form-item>
                    <el-form-item label="文章内容">
                        <textarea id="editor" style="width: 1100px; height: 300px"></textarea>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="OnSubmit">表单提交</el-button>
                    </el-form-item>
                </el-form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'baseform',
    data: function(){
        return {
            form: {
                name: '',
                desc: '',
                publishtime: null,
                status: true,
                context: ''
            },
            defaultImg: '',
            ue: null
        }
    },
    mounted () {
        let _this = this
        _this.ue = UE.getEditor('editor')
    },
    methods: {
        async SelectImg () {
            let _this = this
            let input = document.createElement('input')
            input.type = 'file'
            input.accept = 'image/*'
            input.onchange = function () {
                console.log ("hello");
            }
            let e = new MouseEvent('click')
            input.dispatchEvent(e)
        },
        async OnSubmit () {
            ;
        }
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