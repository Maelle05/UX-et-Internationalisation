let text_b = document.getElementById('blanc_text');
let text_vi = document.getElementById('violet_text');
let text_o = document.getElementById('orange_text');
let text_j = document.getElementById('jaune_text');
let text_r = document.getElementById('rouge_text');
let text_bl = document.getElementById('bleu_text');
let text_v = document.getElementById('vert_text');
let text_n = document.getElementById('noir_text');

let perso_b = document.getElementById('perso_b');
let perso_bl = document.getElementById('perso_bl');
let perso_j = document.getElementById('perso_j');
let perso_n = document.getElementById('perso_n');
let perso_o = document.getElementById('perso_o');
let perso_r = document.getElementById('perso_r');
let perso_v = document.getElementById('perso_v');
let perso_vi = document.getElementById('perso_vi');

        perso_bl.style.display= "none";
        perso_j.style.display= "block";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_vi.style.display= "none";
        perso_v.style.display= "none";
        perso_b.style.display= "none";


let is_show_b = false;


function blanc() {
    if(is_show_b) {
        text_b.style.opacity= "0%";
        perso_b.style.display= "none";

        is_show_b = false;
    } else {
        text_b.style.opacity="100%";
        perso_b.style.display= "block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_j.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";

    }
}
function violet(){
    if(is_show_b) {
        text_vi.style.opacity= "0%";
        perso_vi.style.display="none";
        is_show_b = false;
    } else {
        text_vi.style.opacity= "100%";
        perso_vi.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_b.style.display= "none";
    }

}
function orange(){
    if(is_show_b) {
        text_o.style.opacity= "0%";
        perso_o.style.display="none";

        is_show_b = false;
    } else {
        text_o.style.opacity= "100%";
        perso_o.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";

    }
}
function jaune(){
    if(is_show_b) {
        text_j.style.opacity= "0%";
        perso_j.style.display="none";

        is_show_b = false;
    } else {
        text_j.style.opacity= "100%";
        perso_j.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";

    }

}
function rouge(){
    if(is_show_b) {
        text_r.style.opacity= "0%";
        perso_r.style.display="none";

        is_show_b = false;
    } else {
        text_r.style.opacity= "100%";
        perso_r.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";

    }
}
function bleu(){
    if(is_show_b) {
        text_bl.style.opacity= "0%";
        perso_bl.style.display="none";

        is_show_b = false;
    } else {
        text_bl.style.opacity= "100%";
        perso_bl.style.display= "block";
        is_show_b = true;
        text_v.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";


    }
}
function vert(){
    if(is_show_b) {
        text_v.style.opacity= "0%";
        perso_v.style.display= "none";

        is_show_b = false;
    } else {
        text_v.style.opacity= "100%";
        perso_v.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_n.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_n.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";

    }
}
function noir(){
    if(is_show_b) {
        text_n.style.opacity= "0%";
        perso_n.style.display="none";

        is_show_b = false;
    } else {
        text_n.style.opacity= "100%";
        perso_n.style.display="block";
        is_show_b = true;
        text_bl.style.opacity= "0%";
        text_v.style.opacity= "0%";
        text_o.style.opacity= "0%";
        text_r.style.opacity= "0%";
        text_vi.style.opacity= "0%";
        text_j.style.opacity= "0%";
        text_b.style.opacity= "0%";

        perso_bl.style.display= "none";
        perso_j.style.display= "none";
        perso_o.style.display= "none";
        perso_r.style.display= "none";
        perso_v.style.display= "none";
        perso_vi.style.display= "none";
        perso_b.style.display= "none";

    }
}

let p1 = document.getElementById('p1');
let d1 = document.getElementById('d1');
let p1_1= document.getElementById('p1.1');
p1.style.display = "none";
p1_1.style.display = "block";
function voirPlus(){
    p1.style.display = "block";
}

function voirMoins(){
    p1.style.display = "none";
}
