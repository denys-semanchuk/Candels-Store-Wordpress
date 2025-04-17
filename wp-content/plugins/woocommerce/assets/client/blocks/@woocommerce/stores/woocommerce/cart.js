import*as e from"@wordpress/interactivity";var t={908:e=>{e.exports=import("@woocommerce/stores/store-notices")}},r={};function o(e){var s=r[e];if(void 0!==s)return s.exports;var n=r[e]={exports:{}};return t[e](n,n.exports,o),n.exports}o.d=(e,t)=>{for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{const t=(r={store:()=>e.store},s={},o.d(s,r),s);var r,s;function n(e,t){return!e.ok}function a(e){return Object.assign(new Error(e.message||"Unknown error."),{code:e.code||"unknown_error"})}let i=!1,c=3e3;const{state:d,actions:l}=(0,t.store)("woocommerce",{actions:{*addCartItem({id:e,quantity:t}){let r=d.cart.items.find((({id:t})=>e===t));const o=r?"update-item":"add-item",s=JSON.stringify(d.cart),i={};r?(r.quantity=t,r.key&&(i.cartItemsPendingQuantity=[r.key])):(r={id:e,quantity:t},d.cart.items.push(r),i.productsPendingAdd=[e]);try{const e=yield fetch(`${d.restUrl}wc/store/v1/cart/${o}`,{method:"POST",headers:{Nonce:d.nonce,"Content-Type":"application/json"},body:JSON.stringify(r)}),t=yield e.json();if(n(e))throw a(t);t.errors?.forEach((e=>{l.showNoticeError(e)})),d.cart=t,(({preserveCartData:e=!1})=>{((e,{bubbles:t=!1,cancelable:r=!1,element:o,detail:s={}})=>{if(!CustomEvent)return;o||(o=document.body);const n=new CustomEvent(e,{bubbles:t,cancelable:r,detail:s});o.dispatchEvent(n)})("wc-blocks_added_to_cart",{bubbles:!0,cancelable:!0,detail:{preserveCartData:e}})})({preserveCartData:!0}),function({quantityChanges:e}){window.dispatchEvent(new CustomEvent("wc-blocks_store_sync_required",{detail:{type:"from_iAPI",quantityChanges:e}}))}({quantityChanges:i})}catch(e){d.cart=JSON.parse(s),l.showNoticeError(e)}},*refreshCartItems(){if(!i){i=!0;try{const e=yield fetch(`${d.restUrl}wc/store/v1/cart`,{headers:{"Content-Type":"application/json"}}),t=yield e.json();if(n(e))throw a(t);d.cart=t,c=3e3}catch(e){setTimeout(l.refreshCartItems,c),c*=2}finally{i=!1}}},*showNoticeError(e){yield Promise.resolve().then(o.bind(o,908));const{actions:r}=(0,t.store)("woocommerce/store-notices",{},{lock:"I acknowledge that using a private store means my plugin will inevitably break on the next store release."});r.addNotice({notice:e.message,type:"error",dismissible:!0}),console.error(e)}}},{lock:!0});window.addEventListener("wc-blocks_store_sync_required",(async e=>{"from_@wordpress/data"===e.detail.type&&l.refreshCartItems()}))})();