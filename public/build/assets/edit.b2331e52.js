const o=document.querySelectorAll("[data-id]");o.forEach(e=>{e.addEventListener("click",()=>{const c=document.querySelector(`#product-${e.dataset.id}`),t=document.querySelector(`#product-checkbox-${e.dataset.id}`);Number(e.dataset.id),c.classList.toggle("tr-remove"),e.classList.toggle("btn-remove"),t.checked=!t.checked})});
