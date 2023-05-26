import { Component, Input, OnInit, SimpleChanges } from '@angular/core';
import { GenFunctionsService } from 'src/app/services/gen-functions.service';

@Component({
	selector: 'app-page-header',
	templateUrl: './page-header.component.html',
	styleUrls: ['./page-header.component.css']
})
export class PageHeaderComponent implements OnInit {
	@Input('pageTitle') pageTitle = "";

	constructor(private genfxn:GenFunctionsService) { }
	ngAfterViewInit(): void {
		this.genfxn.imagetobg();
	}

	ngOnInit(): void {
	}

}
