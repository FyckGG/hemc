const showOrderForm = () => {
    if ( document.getElementById("order-form").style.display == "")
        document.getElementById("order-form").style.display = "none";
    else document.getElementById("order-form").style.display = "";
    closeForm('order-form-close');

}

const showQuestionForm = () => {
    //console.log( document.getElementById("question-form"));
    if ( document.getElementById("question-form").style.display == "")
        document.getElementById("question-form").style.display = "none";
    else document.getElementById("question-form").style.display = "";
    closeForm('question-form-close');


}

const closeForm = (form_id) => {
const form = document.getElementById(form_id);
    form.addEventListener('click', function handleClick(event) {
        event.target.parentElement.style.display = "none";
    });
}
