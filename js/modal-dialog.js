const showDialog = () => {
    doc = document.getElementById('view-shot');
    doc.style.display = "block";
    doc.style.visibility = "visible";
    document.body.classList('noscroll'); 
  };

const closeDialog = () => {
  doc = document.getElementById('view-shot');
  doc.style.display = "none";
  doc.style.visibility = "hidden";
  document.body.classList('scroll');    
};