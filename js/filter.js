var fdiv_1 = 0;
var fdiv_2 = 0;

function showhide(buka, tutup) {
    if(this["fdiv_"+buka] == 0) {
        var page=document.getElementById('div_'+tutup);
        this["fdiv_"+tutup] = 0;
        // console.log(this["fdiv_"+tutup]);
        if (!page) return false;
        page.style.visibility='hidden';
        page.style.display='none';

        page=document.getElementById('div_'+buka);
        this["fdiv_"+buka] = 1;
        // console.log(this["fdiv_"+buka]);
        if (!page) return false;
        page.style.display='block';
        page.style.visibility='visible';
    } else if(this["fdiv_"+buka] == 1) {
        page=document.getElementById('div_'+buka);
        this["fdiv_"+buka] = 0;
        // console.log(this["fdiv_"+buka]);
        if (!page) return false;
        page.style.visibility='hidden';
        page.style.display='none';
    }
        
    return true;
}