document.querySelector('#idimgPrin').addEventListener('change', function(){ 
    document.querySelector('.span1').textContent = this.files[0].name;
});

document.querySelector('#idmin1').addEventListener('change', function(){ 
    document.querySelector('.span2').textContent = this.files[0].name;
});

document.querySelector('#idmin2').addEventListener('change', function(){ 
    document.querySelector('.span3').textContent = this.files[0].name;
});