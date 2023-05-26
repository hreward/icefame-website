import { Component, OnInit } from '@angular/core';
import { GenFunctionsService } from "../../services/gen-functions.service";

@Component({
	selector: 'app-team',
	templateUrl: './team.component.html',
	styleUrls: ['./team.component.css']
})
export class TeamComponent implements OnInit {

	constructor(private genfxn:GenFunctionsService) { }

	ngOnInit(): void {
	}

	ngAfterViewInit(): void {
		//Called after ngAfterContentInit when the component's view has been initialized. Applies to components only.
		//Add 'implements AfterViewInit' to the class.
		this.genfxn.imagetobg();
	}

}
