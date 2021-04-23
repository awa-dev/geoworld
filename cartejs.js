var carte = document.querySelector('#carte')
var paths = carte.querySelectorAll('.carte_image a')
var links = carte.querySelectorAll('.carte_list a')

//Polyfill du forEach

if (NodeList.prototype.forEach === undefined) {
    NodeList.prototype.forEach = function (callback) {
        [].forEach.call(this, callback)
    }
}

var activeArea = function (id) {
    carte.querySelectorAll('.is-active').forEach(function (item) {
        item.classList.remove('is-active')
    })
    if (id !== undefined) {

        document.querySelector('#list-' + id).classList.add('is-active')
        document.querySelector('#Pays-' + id).classList.add('is-active')

    }
}

paths.forEach(function (path) {
    path.addEventListener('mouseenter', function () {
        var id = this.id.replace('Pays-', '')
        activeArea(id)
    })

})

links.forEach(function (link){
  link.addEventListener('mouseenter', function(){
      var id= this.id.replace('list-', '')
      activeArea(id)
  })
})

carte.addEventListener('mouseover', function () {
    activeArea()
})

