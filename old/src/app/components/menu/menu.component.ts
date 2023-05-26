import { Component, OnInit } from '@angular/core';

@Component({
	selector: 'app-menu',
	templateUrl: './menu.component.html',
	styleUrls: ['./menu.component.css']
})
export class MenuComponent implements OnInit {

	constructor() { }

	ngOnInit(): void {
	}

	ngAfterViewInit(): void {
		//Called after ngAfterContentInit when the component's view has been initialized. Applies to components only.
		//Add 'implements AfterViewInit' to the class.
		

		//to show sidebar menu
		document.querySelectorAll<HTMLElement>(":scope .navbar-toggler").forEach((value, idx)=>{
			value.addEventListener("click", this.show_sideNavbar);
		});

		//to hide sidebar menu
		document.querySelectorAll<HTMLElement>(":scope .navbar .back-btn").forEach((value, idx)=>{
			value.addEventListener("click", this.hide_sideNavbar);
		});

		//on sidebar link click
		document.querySelectorAll<HTMLElement>(":scope #navbarNavDropdown a").forEach((value, idx)=>{
			value.addEventListener("click", this.hide_sideNavbar);
		});

		document.body.addEventListener("click", (event:any)=>{
			var sidebar = document.querySelector<HTMLElement>("#navbarNavDropdown");
			if(!sidebar?.contains(event.target)){
				//this.hide_sideNavbar()
			}

		});
			
	}

	show_sideNavbar(){
		document.querySelectorAll(":scope .navbar .overlay-bg").forEach((element, idx)=>{
			element.classList.add("show")
		});
		document.querySelectorAll(".navbar-collapse").forEach((element, idx)=>{
			element.classList.add("show")
		});
		document.body.style.overflow = "hidden";
	}


	hide_sideNavbar(){
		document.querySelectorAll(":scope .navbar .overlay-bg").forEach((element, idx)=>{
			element.classList.remove("show")
		});
		document.querySelectorAll(".navbar-collapse").forEach((element, idx)=>{
			element.classList.remove("show")
		});
		document.body.style.overflow = "auto";
	}
}
