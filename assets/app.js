//get user input box
var input = document.getElementById('user_input');
//get the algorithm selector element
var algorithm = document.getElementById('user_algorithm');
//create an eventListener that will take the value and place it as a sort-by value
algorithm.addEventListener('change',function(){
    //if the value is changed, we set the new value as the action of the form
    form.setAttribute('action','?page=sort&algorithm='+this.value);
})
//get the form element
var form = document.getElementsByTagName('form')[0];
form.addEventListener('submit',function(e){
    if(input.value == ''){
        e.preventDefault();
        indicateEmptyInput();
    }
})
//this function will create a border around the inputbox to indicate that it must be filled
function indicateEmptyInput(){
    input.classList.add('no-value');
    setTimeout(() => {
        input.classList.remove('no-value');
    }, 3000);
}