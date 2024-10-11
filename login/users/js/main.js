var wrapper = document.getElementById('wrapper');
var search = document.getElementById('search');
var options = document.getElementById('options');
var person = document.querySelectorAll('.each-search');
var txtVal, filter;

function searchFilter(){
    for(var i = 0; i < person.length; i++){
        txtVal = person[i].children[1].children[0].innerText;
        filter = search.value.toUpperCase();
        if(txtVal.toUpperCase().indexOf(filter) > -1){
            person[i].style.display = '';
        }else{
            person[i].style.display = 'none';
        }    
    }
}

search.onclick = function(){
    options.classList.toggle('d-none');
}

for (var i = 0; i < person.length; i++) {
    
    person[i].onclick = function() {

        const cardElement = "<div class='card'>" + 
        "<button type='button' class='close'><span aria-hidden='true'>&times;</span></button>" + 
        "<div class='left-img'><img class='card-img-top' src=''></div>" + 
        "<div class='details'>" + 
        "<div class='name'></div><div class='email'></div>" + 
        "</div></div>";
        wrapper.insertAdjacentHTML("afterend", cardElement);

        const cardImg = document.querySelector('.card .left-img img');
        const cardName = document.querySelector('.card .details .name');
        const cardEmail = document.querySelector('.card .details .email');

        const imgLink = this.children[0].children[0].getAttribute('src');
        const name = this.children[1].children[0].innerHTML;
        const email = this.children[1].children[1].innerHTML;

        cardImg.src = imgLink;
        cardName.innerHTML = name;
        cardEmail.innerHTML = email;

        document.getElementById('options').classList.add('d-none');

        var closeBtn = document.getElementsByClassName('close');
        for(var i = 0; i < closeBtn.length; i++){
            closeBtn[i].onclick = function(){
                this.parentElement.remove();
            }
        }
    }
}