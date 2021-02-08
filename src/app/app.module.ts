import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { MatToolbarModule, MatIconModule, MatMenuModule, MatListModule } from '@angular/material';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { TeacherComponent } from './teacher/teacher.component';
import { StudentComponent } from './student/student.component';
import { HeaderComponent } from './header/header.component';
import { StudentTableComponent } from './student-table/student-table.component';
import { TeacherTableComponent } from './teacher-table/teacher-table.component';
import { DefaultComponent } from './default/default.component';
import { AboutComponent } from './about/about.component';
import { HttpClientModule } from '@angular/common/http';


@NgModule({
  declarations: [
    AppComponent,
    TeacherComponent,
    StudentComponent,
    HeaderComponent,
    StudentTableComponent,
    TeacherTableComponent,
    DefaultComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MatToolbarModule,
    MatIconModule,
    HttpClientModule,
   

    RouterModule.forRoot([
      
      
      {
        path: '',
        component: DefaultComponent,
        children:[{
          path: '',
          component:AboutComponent
      }]
      },
      
      
    {path:'teacher',
    component:DefaultComponent,
    children:[{
        path: '',
        component:TeacherComponent
    }]
  },
  {path:'student',
  component:DefaultComponent,
  children:[{
      path: '',
      component:StudentComponent
  }]
},
  {path:'teacher_table',
  component:DefaultComponent,
  children:[{
      path: '',
      component:TeacherTableComponent
      
  }]
},
    {
      path:'student_table',
    component:DefaultComponent,
    children:[{
        path: '',
        component:StudentTableComponent
    }]
  }
 
]),
BrowserAnimationsModule
],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
