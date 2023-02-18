import { Component, OnInit, SimpleChanges } from '@angular/core';
import { GenFunctionsService } from '../services/gen-functions.service';

@Component({
	selector: 'app-home',
	templateUrl: './home.component.html',
	styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

	constructor(private genfxn: GenFunctionsService) { }

	ngOnInit(): void {
	}

	ngOnChanges(changes: SimpleChanges): void {
		//Called before any other lifecycle hook. Use it to inject dependencies, but avoid any serious work here.
		//Add '${implements OnChanges}' to the class.
		this.genfxn.imagetobg();
	}

}
