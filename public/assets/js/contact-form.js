document.addEventListener("DOMContentLoaded",function(){let e=document.getElementById("contactForm"),t=document.getElementById("submit-btn"),s=document.createElement("style");function a(e){return e.trim()?e.trim().length<2?"Name must be at least 2 characters.":null:"Name is required."}function r(e){return e.trim()?/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)?null:"Please enter a valid email address.":"Email is required."}function n(e){return e.trim()?e.trim().length<10?"Message must be at least 10 characters.":e.trim().length>1e3?"Message cannot exceed 1000 characters.":null:"Message is required."}function i(e,t){let s=document.getElementById(e+"-error"),a=document.getElementById(e);s.textContent=t,s.style.display="block",a.classList.add("error"),a.classList.remove("success")}function l(e){let t=document.getElementById(e+"-error"),s=document.getElementById(e);t.style.display="none",s.classList.remove("error"),s.classList.add("success")}function o(e,t){let s=document.getElementById("flash-message");s&&s.remove();let a=document.createElement("div");if(a.id="flash-message",a.className=`flash-message flash-${t}`,a.style.display="block",a.innerHTML=`
    <div class="flash-content">
        <div class="flash-icon">
            <i class="fas ${"success"===t?"fa-check-circle":"fa-exclamation-circle"}"></i>
        </div>
        <div class="flash-text">
            <span class="flash-title">${"success"===t?"Success!":"Error!"}</span>
            <span class="flash-message-text">${e}</span>
        </div>
        <button class="flash-close" onclick="this.parentElement.parentElement.style.display='none'">
            <i class="fas fa-times"></i>
        </button>
    </div>
`,!document.getElementById("flash-message-styles")){let r=document.createElement("style");r.id="flash-message-styles",r.textContent=`
        .flash-message {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            max-width: 400px;
            min-width: 300px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: slideInRight 0.3s ease-out;
            font-family: 'Montserrat', sans-serif;
        }
        .flash-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border-left: 4px solid #1e7e34;
        }
        .flash-error {
            background: linear-gradient(135deg, #dc3545 0%, #e74c3c 100%);
            border-left: 4px solid #c82333;
        }
        .flash-content {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            color: white;
        }
        .flash-icon {
            font-size: 24px;
            margin-right: 12px;
            opacity: 0.9;
        }
        .flash-text {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .flash-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .flash-message-text {
            font-size: 13px;
            opacity: 0.9;
            line-height: 1.4;
        }
        .flash-close {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            padding: 4px;
            margin-left: 12px;
            opacity: 0.7;
            transition: opacity 0.2s ease;
            border-radius: 4px;
        }
        .flash-close:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.1);
        }
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
        .flash-message.hide {
            animation: slideOutRight 0.3s ease-in forwards;
        }
        @media (max-width: 768px) {
            .flash-message {
                top: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
                min-width: auto;
            }
        }
    `,document.head.appendChild(r)}document.body.appendChild(a),setTimeout(()=>{a.parentElement&&(a.classList.add("hide"),setTimeout(()=>{a.parentElement&&a.remove()},300))},5e3)}s.textContent=`
.error-message {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
    display: none;
}
.form-control.error {
    border-color: #dc3545;
}
.form-control.success {
    border-color: #28a745;
}
#form-message {
    padding: 10px;
    border-radius: 4px;
    margin-top: 10px;
    display: none;
}
#form-message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
#form-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
`,document.head.appendChild(s),document.getElementById("name").addEventListener("blur",function(){let e=a(this.value);e?i("name",e):l("name")}),document.getElementById("email").addEventListener("blur",function(){let e=r(this.value);e?i("email",e):l("email")}),document.getElementById("message").addEventListener("blur",function(){let e=n(this.value);e?i("message",e):l("message")}),e.addEventListener("submit",function(s){s.preventDefault();let d=document.getElementById("flash-message");d&&d.remove();let c=new FormData(e),m=c.get("name"),g=c.get("email"),f=c.get("message"),p=a(m),h=r(g),u=n(f);p?i("name",p):l("name"),h?i("email",h):l("email"),u?i("message",u):l("message"),!p&&!h&&!u&&(t.disabled=!0,t.textContent="Sending...",fetch(e.action,{method:"POST",body:c,headers:{"X-Requested-With":"XMLHttpRequest","X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]')?.getAttribute("content")||c.get("_token")}}).then(e=>e.json()).then(t=>{t.success?(o(t.message,"success"),e.reset(),["name","email","message"].forEach(e=>{l(e)})):t.errors?Object.keys(t.errors).forEach(e=>{i(e,t.errors[e][0])}):o(t.message||"Something went wrong. Please try again.","error")}).catch(e=>{console.error("Error:",e),o("Something went wrong. Please try again.","error")}).finally(()=>{t.disabled=!1,t.textContent="Send a message"}))})});
