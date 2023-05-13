window.addEventListener("load", () =>
{
    const loader = document.querySelector(".loader");
    loader.classList.add("loader-hidden");

    loader.addEventListener("transitionend", () => 
    {
        document.body.removeChild("loader");
    });
});

const observer = new IntersectionObserver((entries) => 
{
    entries.forEach((entry) => 
    {
        console.log(entry);
        if (entry.isIntersecting)
        {
            entry.target.classList.add("show");
        }
    });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

window.onload = function()
        {
            let popoversNodes = document.querySelectorAll("[data-toggle='popover']");
            console.log(popoversNodes);

            let popovers = [];

            for(const el of popoversNodes)
            {
                popovers.push(new bootstrap.Popover(el));
            }
        }
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});

$("#popover").popover({ trigger: "hover" });
