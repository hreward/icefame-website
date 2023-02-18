import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ServiceWorkerModule } from '@angular/service-worker';
import { environment } from '../environments/environment';
import { HomeComponent } from './home/home.component';
import { MenuComponent } from './components/menu/menu.component';
import { PageHeaderComponent } from './components/page-header/page-header.component';
import { DownloadAppComponent } from './components/download-app/download-app.component';
import { FooterComponent } from './components/footer/footer.component';
import { ExploreDownloadAppComponent } from './components/explore-download-app/explore-download-app.component';
import { AboutUsComponent } from './about-us/about-us.component';
import { ContactUsComponent } from './contact-us/contact-us.component';
import { FaqComponent } from './faq/faq.component';
import { CareerComponent } from './career/career.component';
import { HelpSupportComponent } from './help-support/help-support.component';
import { TeamComponent } from './components/team/team.component';
import { FeaturesListComponent } from './components/features-list/features-list.component';
import { TestimonialComponent } from './components/testimonial/testimonial.component';
import { RecentBlogsComponent } from './components/recent-blogs/recent-blogs.component';
import { BackToTopComponent } from './components/back-to-top/back-to-top.component';
import { allIcons } from 'angular-feather/icons';
import { FeatherModule } from 'angular-feather';
import { DownloadAppPageComponent } from './download-app-page/download-app-page.component';
import { NumberSectionComponent } from './components/number-section/number-section.component';
import { DemoComponent } from './demo/demo.component';
import { PrivacyPolicyComponent } from './privacy-policy/privacy-policy.component';

@NgModule({
	declarations: [
		AppComponent,
		HomeComponent,
		MenuComponent,
		PageHeaderComponent,
		DownloadAppComponent,
		FooterComponent,
		ExploreDownloadAppComponent,
		AboutUsComponent,
		ContactUsComponent,
		FaqComponent,
		CareerComponent,
		HelpSupportComponent,
		TeamComponent,
		FeaturesListComponent,
		TestimonialComponent,
		RecentBlogsComponent,
		BackToTopComponent,
  DownloadAppPageComponent,
  NumberSectionComponent,
  DemoComponent,
  PrivacyPolicyComponent
	],
	imports: [
		BrowserModule,
		AppRoutingModule,
		FeatherModule.pick(allIcons),
		ServiceWorkerModule.register('ngsw-worker.js', {
			enabled: environment.production,
			// Register the ServiceWorker as soon as the application is stable
			// or after 30 seconds (whichever comes first).
			registrationStrategy: 'registerWhenStable:30000'
		})
	],
	exports: [
		FeatherModule
	],
	providers: [],
	bootstrap: [AppComponent]
})
export class AppModule { }
