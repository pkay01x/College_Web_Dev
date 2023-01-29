
<style>
.dropdown {
  width: auto;
  position: relative;
}
.dropdown__options--visible .dropdown__skeleton {
  box-shadow: 0 11px 12px -5px #dbe0f5;
}
.dropdown__options--visible .dropdown__options {
  animation: showit 0.35s forwards ease-out;
}
.dropdown__options--visible .dropdown__arrow {
  transform: rotate(-180deg);
  right: 26px;
}
.dropdown__skeleton {
  border: 2px solid #dbe0f5;
  background-color: #eee;
  border-radius: 5px;
  padding: 5px 30px;
  position: relative;
  transition: box-shadow 0.2s cubic-bezier(0.17, 0.67, 0.83, 0.67);
  cursor: pointer;
  user-select: none;
}
.dropdown__skeleton label {
  font-weight: 700;
  text-transform: uppercase;
  color: #9297ab;
  font-size: 0.8rem;
  letter-spacing: 0.64px;
  display: block;
  cursor: pointer;
}
.dropdown__option {
  display: flex;
  align-items: center;
}
.dropdown__option span {
  margin-left: 10px;
  font-weight: 700;
  color: #5e6582;
  font-size: 1.1rem;
}
.dropdown__arrow {
  position: absolute;
  top: 50%;
  right: 20px;
  width: 30px;
  transition: all 0.2s ease-in-out;
  transform-origin: top;
}
.dropdown__arrow::before, .dropdown__arrow::after {
  --angle: 45deg;
  content: "";
  width: 15px;
  background-color: #5e6582;
  display: block;
  padding: 2px;
  border-radius: 2px;
  position: absolute;
}
.dropdown__arrow::before {
  transform: rotate(var(--angle));
}
.dropdown__arrow::after {
  transform: rotate(calc(var(--angle) * -1));
  margin-left: 9px;
}
.dropdown__options {
  position: absolute;
  top: 90%;
  right: 13px;
  border: 2px solid #dbe0f5;
  border-radius: 5px;
  padding: 20px 10px;
  background-color: #fff;
  width: 280px;
  transform: scale(0);
  z-index: 1;
}
@keyframes showit {
  0% {
    transform: scale(0);
  }
  70% {
    transform: scale(1.05);
  }
  80% {
    transform: scale(0.95);
  }
  100% {
    transform: scale(1);
  }
}
.dropdown__options .dropdown__option {
  padding: 6px 10px;
  transition: background-color 0.2s ease-in-out, opacity 0.2s ease-in-out;
  cursor: pointer;
  opacity: 0.7;
  border-radius: 5px;
}
.dropdown__options .dropdown__option:not(:last-child) {
  margin-bottom: 15px;
}

.dropdown__options .dropdown__option--selected {
  opacity: 1;
}
.dropdown__options::before {
  content: "";
  position: absolute;
  bottom: calc(100% - 3px);
  right: 20px;
  height: 10px;
  width: 10px;
  background-color: #fff;
  border-top: 2px solid #dbe0f5;
  border-left: 2px solid #dbe0f5;
  transform: rotate(45deg);
}

*, *::after, *::before {
  box-sizing: border-box;
}

img {
  max-width: 26px;
  display: block;
}
</style>

 <div class="dropdown">
    <div class="dropdown__skeleton">
      <label>Location</label>
      <div class="dropdown__selected dropdown__option"><img src="images/flag/np.png" alt="Nepal"/><span>Nepal</span></div>
      
      <div class="dropdown__arrow"></div>
    </div>
    
    <div class="dropdown__options">
      <div class="dropdown__option dropdown__option--selected"><img src="images/flag/np.png" alt="Nepal"/><span>Nepal</span></div>

      <div class="dropdown__option"><img src="images/flag/Uk.png" alt="U.S."/><span>United Kingdom</span></div>
      
      <div class="dropdown__option"><img src="images/flag/usa.png" alt="U.S."/><span>U.S.</span></div>
      
      <div class="dropdown__option"><img src="images/flag/fc.png" alt="France"/><span>France</span></div>
      
      <div class="dropdown__option"><img src="images/flag/sp.png" alt="Spain"/><span>Spain</span></div>
      
      <div class="dropdown__option"><img src="images/flag/gn.png" alt="Germany"/><span>Germany</span></div>
    </div>
  </div>
</div>
  

  
<script id="rendered-js" >
console.clear();

const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
  dropdown.addEventListener('click', e => {
    dropdown.classList.toggle('dropdown__options--visible');
  });

  dropdown.querySelectorAll('.dropdown__options .dropdown__option').forEach(opt => {
    opt.addEventListener('click', e => {
      dropdown.querySelector('.dropdown__selected').innerHTML = opt.innerHTML;
    });
  });
});

    </script>

  