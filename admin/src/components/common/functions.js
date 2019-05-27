export default {
    ajax: function (url, dat) {
        return new Promise(function (resolve, reject) {
            let xhr = new XMLHttpRequest()
            xhr.onload = function () {
                resolve (xhr.responseText)
            }
            xhr.open ('POST', url)
            xhr.send (dat)
        })
    }
}