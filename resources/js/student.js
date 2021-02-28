
const studentA=document.querySelector('.student');
const teacherA=document.querySelector('.teacher');
const studentYA=document.querySelector('.studentY');
const studentOA=document.querySelector('.studentO');
const studTeachCont=document.querySelector('.mainconteneer');
const studLink=document.querySelector('.students_links');


studentA.addEventListener('click', ()=>{

teacherA.classList.toggle('hidden');
studTeachCont.style.justifyContent='flex-start';
studentA.classList.toggle('hidden_deley');
studLink.classList.toggle('visibility');
})

teacherA.addEventListener('click', ()=>{

    studentA.classList.toggle('hidden');
    studTeachCont.style.justifyContent='flex-end';
    teacherA.classList.toggle('hidden_deley');
    //studLink.classList.toggle('visibility');
    }

)