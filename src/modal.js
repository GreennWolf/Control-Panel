//GLOBALS
PlayerName = document.querySelector('.username').innerHTML;
selectedA=false;
selectedR = false;
selectedT = false;


//LOGIN-MODAL
const disabled = document.querySelector("#disabled")
const LoginModal = document.querySelector("#loginmodal")

if(PlayerName != 'Perfil'){
    LoginModal.close();
    disabled.close()
}

//ADDA-MODAL

const addaOpen = document.querySelector('#adda');
const addaClose = document.querySelector('#adda-close');
const addaModal = document.querySelector('#adda-modal');

addaOpen.addEventListener('click',()=>{
    addaModal.showModal();
})

addaClose.addEventListener('click',()=>{
    addaModal.close();
})

//CLONEA-MODAL

const cloneaOpen = document.querySelector('#clonea');
const cloneaClose = document.querySelector('#clonea-close');
const cloneaModal = document.querySelector('#clonea-modal');

cloneaOpen.addEventListener('click',()=>{
    if(selectedA){
        cloneaModal.showModal();
    }else{
        alert("Select Account")
    }
})

cloneaClose.addEventListener('click',()=>{
    cloneaModal.close();
})

//EDITA-MODAL
const editaOpen = document.querySelector('#edita');
const editaClose = document.querySelector('#edita-close');
const editaModal = document.querySelector('#edita-modal');

editaOpen.addEventListener('click',()=>{
    if(selectedA){
        editaModal.showModal();
    }else{
        alert("Select Account")
    }
})

editaClose.addEventListener('click',()=>{
    editaModal.close();
})

//Deletea-MODAL
const deleteaOpen = document.querySelector('#deletea');
const deleteaClose = document.querySelector('#deletea-close');
const deleteaModal = document.querySelector('#deletea-modal');
const deleteaForm = document.getElementById('deletea-form');

deleteaOpen.addEventListener('click',()=>{
    if(selectedA){
        deleteaModal.showModal();
    }else{
        alert("Select Account")
    }
})

deleteaClose.addEventListener('click',()=>{
    deleteaModal.close();
})

//ADDR-MODAL

const addrOpen = document.querySelector('#addr');
const addrClose = document.querySelector('#addr-close');
const addrModal = document.querySelector('#addr-modal');

addrOpen.addEventListener('click',()=>{
    addrModal.showModal();
})

addrClose.addEventListener('click',()=>{
    addrModal.close();
})

//Cloner-MODAL

const clonerOpen = document.querySelector('#cloner');
const clonerClose = document.querySelector('#cloner-close');
const clonerModal = document.querySelector('#cloner-modal');

clonerOpen.addEventListener('click',()=>{
    if(selectedR){
        clonerModal.showModal();
    }else{
        alert("Select Room");
    }
})

clonerClose.addEventListener('click',()=>{
    clonerModal.close();
})

//Editr-MODAL

const editrOpen = document.querySelector('#editr');
const editrClose = document.querySelector('#editr-close');
const editrModal = document.querySelector('#editr-modal');

editrOpen.addEventListener('click',()=>{
    if(selectedR){
        editrModal.showModal();
    }else{
        alert("Select Room")
    }
})

editrClose.addEventListener('click',()=>{
    editrModal.close();
})

//Deleter-MODAL
const deleterOpen = document.querySelector('#deleter');
const deleterClose = document.querySelector('#deleter-close');
const deleterModal = document.querySelector('#deleter-modal');
const deleterForm = document.getElementById('deleter-form');

deleterOpen.addEventListener('click',()=>{
    if(selectedR && Status == 'Offline'){
        deleterModal.showModal();
    }else{
        alert("Select Room OR Turn offline Room")
    }
})

deleterClose.addEventListener('click',()=>{
    deleterModal.close();
})

//Actionr-MODAL
const actionrOpen = document.querySelector('#actionr');
const actionrClose = document.querySelector('#actionr-close');
const actionrModal = document.querySelector('#actionr-modal');
const actionrForm = document.getElementById('actionr-form');

actionrOpen.addEventListener('click',()=>{
    if(selectedR){
        actionrModal.showModal();
    }else{
        alert("Select Room")
    }
})

actionrClose.addEventListener('click',()=>{
    actionrModal.close();
})


//ADDT-MODAL

const addtOpen = document.querySelector('#addt');
const addtClose = document.querySelector('#addt-close');
const addtModal = document.querySelector('#addt-modal');

addtOpen.addEventListener('click',()=>{
    addtModal.showModal();
})

addtClose.addEventListener('click',()=>{
    addtModal.close();
})

//Clonet-MODAL

const clonetOpen = document.querySelector('#clonet');
const clonetClose = document.querySelector('#clonet-close');
const clonetModal = document.querySelector('#clonet-modal');

clonetOpen.addEventListener('click',()=>{
    if(selectedT){
        clonetModal.showModal();
    }else{
        alert("Select Tournament");
    }
})

clonetClose.addEventListener('click',()=>{
    clonetModal.close();
})

//Editt-MODAL

const edittOpen = document.querySelector('#editt');
const edittClose = document.querySelector('#editt-close');
const edittModal = document.querySelector('#editt-modal');

edittOpen.addEventListener('click',()=>{
    if(selectedT){
        edittModal.showModal();
    }else{
        alert("Select Tournament")
    }
})

edittClose.addEventListener('click',()=>{
    edittModal.close();
})

//Deletet-MODAL
const deletetOpen = document.querySelector('#deletet');
const deletetClose = document.querySelector('#deletet-close');
const deletetModal = document.querySelector('#deletet-modal');
const deletetForm = document.getElementById('deletet-form');

deletetOpen.addEventListener('click',()=>{
    if(selectedT && Status =='Offline'){
        deletetModal.showModal();
    }else{
        alert("Select Tournament OR Turn offline Tournament")
    }
})

deletetClose.addEventListener('click',()=>{
    deletetModal.close();
})

//Actionr-MODAL
const actiontOpen = document.querySelector('#actiont');
const actiontClose = document.querySelector('#actiont-close');
const actiontModal = document.querySelector('#actiont-modal');
const actiontForm = document.getElementById('actiont-form');

actiontOpen.addEventListener('click',()=>{
    if(selectedT){
        actiontModal.showModal();
    }else{
        alert("Select Tournament")
    }
})

actiontClose.addEventListener('click',()=>{
    actiontModal.close();
})

//Info-Modal
infoOpen = document.getElementById('infop');
infoModal = document.getElementById('infop-modal');
infoClose = document.getElementById('infop-close')

infoOpen.addEventListener('click',()=>{
    infoModal.showModal();
})

infoClose.addEventListener('click',()=>{
    infoModal.close();
})





