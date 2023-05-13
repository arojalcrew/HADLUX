document.querySelectorAll('.posts-grid .box-container .box .content').forEach(content => {
   if(content.innerHTML.length > 100) content.innerHTML = content.innerHTML.slice(0, 100);
});
