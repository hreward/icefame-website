import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutUsComponent } from './about-us/about-us.component';
import { CareerComponent } from './career/career.component';
import { ContactUsComponent } from './contact-us/contact-us.component';
import { DemoComponent } from './demo/demo.component';
import { DownloadAppPageComponent } from './download-app-page/download-app-page.component';
import { FaqComponent } from './faq/faq.component';
import { HelpSupportComponent } from './help-support/help-support.component';
import { HomeComponent } from './home/home.component';
import { PrivacyPolicyComponent } from './privacy-policy/privacy-policy.component';

const routes: Routes = [
	{path:"home", component:HomeComponent},
	{path:"aboutus", component:AboutUsComponent},
	{path:"contactus", component:ContactUsComponent},
	{path:"career", component:CareerComponent},
	{path:"faq", component:FaqComponent},
	{path:"help", component:HelpSupportComponent},
	{path:"demo", component:DemoComponent},
	{path:"privacy-policy", component:PrivacyPolicyComponent},
	{path:"download/:id", component:DownloadAppPageComponent},
	{path:"download", component:DownloadAppPageComponent},
	{path:"", component:HomeComponent},
	{path:"**", component:HomeComponent}
];

@NgModule({
	imports: [RouterModule.forRoot(routes, {scrollPositionRestoration: 'enabled', onSameUrlNavigation: 'reload', anchorScrolling:'enabled'})],
	exports: [RouterModule]
})
export class AppRoutingModule { }
