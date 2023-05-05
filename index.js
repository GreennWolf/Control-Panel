//TABS
const li = document.querySelectorAll('.li')
const tabs = document.querySelectorAll('.tabs')

li.forEach((cadaLi,i)=>{
    li[i].addEventListener('click',()=>{
        
        li.forEach((cadaLi,i)=>{
            li[i].classList.remove('active')
            tabs[i].classList.remove('active')
        })

        li[i].classList.add('active')
        tabs[i].classList.add('active')
    })
})

//Panel Limitis
let Account_Created =$('div#Accounts_Created').children('div').last().attr('value');
let Rings_Created = $('div#Rings_Created').children('div').last().attr('value');
let Tournaments_Created = $('div#Tournaments_Created').children('div').last().attr('value');

const MaxRingsAvailable = $('p#maxRoom').attr('value');
const maxTournamentAvailable = $('p#maxTournament').attr('value');




//ACCOUNTS

const PlayerC = document.getElementById('PlayerC');
const RealNameC = document.getElementById('RealNameC');
const GenderC = document.getElementById('GenderC');
const LocationC = document.getElementById('LocationC');
const PasswordC = document.getElementById('PasswordC');
const EmailC = document.getElementById('EmailC');
const BalanceC = document.getElementById('BalanceC');

const PlayerE = document.getElementById('PlayerE');
const RealNameE = document.getElementById('RealNameE');
const GenderE = document.getElementById('GenderE');
const LocationE = document.getElementById('LocationE');
const PasswordE = document.getElementById('PasswordE');
const EmailE = document.getElementById('EmailE');
const BalanceE = document.getElementById('BalanceE');

const PlayerD = document.getElementById('PlayerD');

//ROOM
const GameAR = document.getElementById("GameAR");
const Mixed = document.getElementById('Mixed');
const MixedListAR = document.getElementById('MixedListAR');

const GameCR = document.getElementById('GameCR');
const MixedListCR = document.getElementById('MixedListCR');
const privateCRY = document.getElementById('privateCRY');
const privateCRN = document.getElementById('privateCRN');
const passwordCR = document.getElementById('passwordCR');
const autoCRY = document.getElementById('autoCRY');
const autoCRN = document.getElementById('autoCRN');
const descriptionCR = document.getElementById('descriptionCR');

const NameER = document.getElementById('NameER');
const GameER = document.getElementById('GameER');
const MixedListER = document.getElementById('MixedListER');
const privateERY = document.getElementById('privateERY');
const privateERN = document.getElementById('privateERN');
const passwordER = document.getElementById('passwordER');
const autoERY = document.getElementById('autoERY');
const autoERN = document.getElementById('autoERN');
const descriptionER = document.getElementById('descriptionER');

const RoomD = document.getElementById('RoomD');
const RoomA = document.getElementById('RoomA');

//TOURNAMENT
const GameAT = document.getElementById("GameAT");
const MixedListAT = document.getElementById('MixedListAT');

const GameCT = document.getElementById('GameCT');
const MixedListCT = document.getElementById('MixedListCT');
const privateCTY = document.getElementById('privateCTY');
const privateCTN = document.getElementById('privateCTN');
const passwordCT = document.getElementById('passwordCT');
const autoCTY = document.getElementById('autoCTY');
const autoCTN = document.getElementById('autoCTN');
const descriptionCT = document.getElementById('descriptionCT');

const NameET = document.getElementById('NameET');
const GameET = document.getElementById('GameET');
const MixedListET = document.getElementById('MixedListET');
const privateETY = document.getElementById('privateETY');
const privateETN = document.getElementById('privateETN');
const passwordET = document.getElementById('passwordET');
const autoETY = document.getElementById('autoETY');
const autoETN = document.getElementById('autoETN');
const descriptionET = document.getElementById('descriptionET');

const TournamentD = document.getElementById('TournamentD');
const TournamentA = document.getElementById('TournamentA');




$("div.container-gridA").click( function() {		

	selectedA = true;
    	
    email = $(this).children('span').eq(0).attr("value");
    player = $(this).children('span').eq(1).attr("value");  
    balance = $(this).children('span').eq(2).attr("value");       
    realName = $(this).children('span').eq(4).attr("value");
    locations = $(this).children('span').eq(5).attr("value");  
    gender = $(this).children('span').eq(6).attr("value");
    avatar = $(this).children('span').eq(7).attr("value");  
    pwHash = $(this).children('span').eq(8).attr("value");           

    //  console.log(email,player,balance,gender,realName,locations,pwHash)
    
    
    BalanceE.value = balance;
    EmailE.value = email;
    RealNameE.value = realName;
    LocationE.value = locations;
    GenderE.value = gender;

    BalanceC.value = balance;
    EmailC.value = email;
    RealNameC.value = realName;
    LocationC.value = locations;
    GenderC.value = gender;

    PlayerD.value = player;
    
    
    $('div.container-gridA').removeClass('active-row');
    $(this).addClass('active-row');
    
}); 

//ROOMS

$('#GameAR').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListAR').prop("disabled", false);
    } else {
        $('#MixedListAR').prop("disabled", true);
        $('#MixedListAR').val('');
    }
})

$('#GameER').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListER').prop("disabled", false);
    } else {
        $('#MixedListER').prop("disabled", true);
        $('#MixedListER').val('');
    }
})


$('#GameCR').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListCR').prop("disabled", false);
    } else {
        $('#MixedListCR').prop("disabled", true);
        $('#MixedListCR').val('');
    }
})


$("div.container-gridR").click( function() {	

    $('div.container-gridR').removeClass('active-row');
    $(this).addClass('active-row');
    selectedR = true;
    
    Name = $(this).children('span').eq(0).attr("value");
    Status = $(this).children('span').eq(1).attr("value");
    PW = $(this).children('span').eq(2).attr("value");  
    Game = $(this).children('span').eq(4).text();   
    Description = $(this).children('span').eq(5).attr("value");       
    MixedList = $(this).children('span').eq(6).attr("value");
    Private = $(this).children('span').eq(3).attr("value");  
    Auto = $(this).children('span').eq(7).attr("value");      

    console.log(Name,Game,PW,Auto,Description,MixedList,Private)
    
    NameER.value = Name;
    GameER.value = Game;
    passwordER.value = PW;
    descriptionER.value = Description;
    MixedListER.value = MixedList;
    passwordER.value = PW;
    

    GameCR.value = Game;
    passwordCR.value = PW;
    descriptionCR.value = Description;
    MixedListCR.value = MixedList;
    passwordCR.value = PW;

    RoomD.value = Name;
    RoomA.value = Name;
    
    if(Auto == 'Yes'){
        autoCRY.checked = true;
        autoERY.checked = true;
    }else{
        autoCRN.checked = true;
        autoERN.checked = true;
    }

    if(Private == 'Yes'){
        privateCRY.checked = true;
        privateERY.checked = true;
    }else{
        privateCRN.checked = true;
        privateERN.checked = true;
    }

    if(Game == 'Mixed'){
        MixedListCR.disabled = false;
        MixedListER.disabled = false;
    }

    
    
});  

//TOURNAMENTS

$('#GameAT').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListAT').prop("disabled", false);
    } else {
        $('#MixedListAT').prop("disabled", true);
        $('#MixedListAT').val('');
    }
})

$('#GameET').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListET').prop("disabled", false);
    } else {
        $('#MixedListET').prop("disabled", true);
        $('#MixedListET').val('');
    }
})


$('#GameCT').change(function(e) {
    if ($(this).val() === "Mixed") {
        $('#MixedListCT').prop("disabled", false);
    } else {
        $('#MixedListCT').prop("disabled", true);
        $('#MixedListCT').val('');
    }
})


$("div.container-gridT").click( function() {	

    $('div.container-gridT').removeClass('active-row');
    $(this).addClass('active-row');
    selectedT = true;
    
    Name = $(this).children('span').eq(0).attr("value");
    Status = $(this).children('span').eq(1).attr("value");
    PW = $(this).children('span').eq(2).attr("value");  
    Game = $(this).children('span').eq(4).text();   
    Description = $(this).children('span').eq(5).attr("value");       
    MixedList = $(this).children('span').eq(6).attr("value");
    Private = $(this).children('span').eq(3).attr("value");  
    Auto = $(this).children('span').eq(7).attr("value");      

    console.log(Name,Game,PW,Auto,Description,MixedList,Private)
    
    NameET.value = Name;
    GameET.value = Game;
    passwordET.value = PW;
    descriptionET.value = Description;
    MixedListET.value = MixedList;
    passwordET.value = PW;
    

    GameCT.value = Game;
    passwordCT.value = PW;
    descriptionCT.value = Description;
    MixedListCT.value = MixedList;
    passwordCT.value = PW;

    TournametD.value = Name;
    TournametA.value = Name;
    
    if(Auto == 'Yes'){
        autoCTY.checked = true;
        autoETY.checked = true;
    }else{
        autoCTN.checked = true;
        autoETN.checked = true;
    }

    if(Private == 'Yes'){
        privateCTY.checked = true;
        privateETY.checked = true;
    }else{
        privateCTN.checked = true;
        privateETN.checked = true;
    }

    if(Game == 'Mixed'){
        MixedListCT.disabled = false;
        MixedListET.disabled = false;
    }

    
    
});

if(Tournaments_Created === undefined){
    Tournaments_Created = 0;
}

if(Account_Created === undefined){
    Account_Created = 0;
}
if(Rings_Created === undefined){
    Rings_Created = 0;
}

console.log(Account_Created,Rings_Created,Tournaments_Created,MaxRingsAvailable);

if(Tournaments_Created > maxTournamentAvailable){
    $('#addt').addClass('not-active');
    $('#clonet').addClass('not-active');
}

if(Rings_Created > MaxRingsAvailable){
    $('#addr').addClass('not-active');
    $('#cloner').addClass('not-active');
    console.log('nmss')
}

console.log(Account_Created,Rings_Created,Tournaments_Created,MaxRingsAvailable);