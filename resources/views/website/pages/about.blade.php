 @extends('website.layout.app')
@section('title', 'Home')
@section('content')

 
 <!-- About Section3 Start -->
        <section class="about-section-3 section-padding fix">
            <div class="left-shape float-bob-y">
                <img src="{{ asset('assets/img/home-3/about/hand.png') }}" alt="img">
            </div>
            <div class="right-shape float-bob-y">
                <img src="{{ asset('assets/img/home-3/about/teeth.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="about-wrapper-3">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-left-item">
                                <div class="about-image wow fadeInUp" data-wow-delay=".3s">
                                    <img src="{{ asset('assets/img/home-3/about/about-1.jpg') }}" alt="img">
                                </div>
                                <h5 class="wow fadeInUp" data-wow-delay=".4s">
                                    Welcome To Hospa General Hospital. We are <br> open 24/7 at your service.
                                </h5>
                                <div class="about-list-item wow fadeInUp" data-wow-delay=".5s">
                                    <ul class="list">
                                        <li>
                                            <i class="far fa-check"></i>
                                            Comprehensive Care
                                        </li>
                                        <li>
                                            <i class="far fa-check"></i>
                                            Management consultation
                                        </li>
                                    </ul>
                                    <ul class="list">
                                        <li>
                                            <i class="far fa-check"></i>
                                            Specialized Support
                                        </li>
                                        <li>
                                            <i class="far fa-check"></i>
                                           Instant Operation & Appointment
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title mb-0">
                                    <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">ABOUT US</span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        Heart & Science of Medical Test for Your Treatment
                                    </h2>
                                </div>
                                <p class="about-text wow fadeInUp" data-wow-delay=".2s">
                                    Your brand deserves more than just attention—it deserves results. That’s why we offer end-to-end creative services that help you engage your audience.
                                </p>
                                <div class="about-icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon-item">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/home-3/about/icon-1.png') }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Medical And <br> Expertise Services
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/home-3/about/icon-2.png') }}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h5>
                                                Medicine and Our <br> instrument
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                    <a href="#" class="theme-btn">
                                        <i class="far fa-chevron-right"></i>
                                        More About us
                                    </a>
                                    <a href="#"  class="theme-btn style-2">
                                        <i class="far fa-chevron-right"></i>
                                        Make Appointment
                                    </a>
                                </div>
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".7s">
                                    <img src="{{ asset('assets/img/home-3/about/about-2.jpg') }}" alt="img">
                                    <div class="circle-image">
                                        <img src="{{ asset('assets/img/home-3/about/text.png') }}" alt="img">
                                        <a href="#"  class="arrow-icon">
                                            <i class="fal fa-long-arrow-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marquee Section Start -->
        <div class="marquee-section-2 fix">
            <div class="mycustom-marque">
              <div class="scrolling-wrap style-2">
               <div class="comm">
                   <div></div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Our Projects</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Instant Video</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Online Support</div>
                    <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> 24/7 Medicine</div>
               </div>
               <div class="comm">
                   <div></div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Our Projects</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Instant Video</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Online Support</div>
                    <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> 24/7 Medicine</div>
               </div>
               <div class="comm">
                   <div></div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Our Projects</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Instant Video</div>
                   <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> Online Support</div>
                    <div class="cmn-textslide"><img src="{{ asset('assets/img/home-5/marque.png') }}" alt="img"> 24/7 Medicine</div>
               </div>
           </div>
         </div>
        </div>

        <!-- Time Table Section Start -->
        <section class="time-table-section fix section-padding">
            <div class="time-shape-1">
                <img src="{{ asset('assets/img/home-2/time-table/shape-1.png') }}" alt="img">
            </div>
            <div class="time-shape-2">
                <img src="{{ asset('assets/img/home-2/time-table/shape-2.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="time-table-wrapper">
                    <div class="section-title text-center">
                        <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">TITME TABLE</span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Timing Calendar of Our Medical</h2>
                        <p class="mt-3">Patient-centred care is about treating a person receiving healthcare with dignity and respect.</p>
                    </div>
                    <ul class="nav">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link active">
                               All Events
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link">
                               Cardiology
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link">
                                Dental
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link">
                                Psychiatry
                            </a>
                        </li>
                         <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link">
                                Rhinology
                            </a>
                        </li>
                         <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#"  data-bs-toggle="tab" class="nav-link">
                                Pulmonary
                            </a>
                        </li>
                    </ul>
                     <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="thumb2" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="thumb4" class="tab-pane fade">
                               <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="thumb5" class="tab-pane fade">
                               <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="thumb6" class="tab-pane fade">
                               <div class="table-responsive">
                                <table class="table schedule_table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                            <th scope="col">Saturday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 am</div>
                                            </td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Matthew
                                                    </span>
                                                    <span class="trainer_name">Cancer Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                        
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Eliyas
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">11:00 am</div>
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Smith
                                                    </span>
                                                    <span class="trainer_name">Orthopedics</span>
                                                    <span class="time">9:00 am&nbsp;-&nbsp;10:00 am</span>
                                                </div>
                                            </td>
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">1:00 pm</div>
                                            </td>
                                        <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">11:00 am - 1:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Rachel
                                                    </span>
                                                    <span class="trainer_name">Dental Care</span>
                                                    <span class="time">1:00 pm - 2:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">3:00 pm</div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Lauren
                                                    </span>
                                                    <span class="trainer_name">Diagostic</span>
                                                    <span class="time">3:00 pm - 4:00 pm</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">5:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                        Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">9:00 am - 11:00 am</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Samantha
                                                    </span>
                                                    <span class="trainer_name">Radiation Therapy</span>
                                                    <span class="time">5:00 am - 7:00 pm</span>
                                                </div>
                                            </td>
                                    
                                            <td>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">7:00 pm</div>
                                            </td>
                                            <td rowspan="2" class="active">
                                                <div class="schedule_item">
                                                    <span class="class_name">
                                                    Dr. Robinson
                                                    </span>
                                                    <span class="trainer_name">Neurology</span>
                                                    <span class="time">7:00 pm - 9:00 pm</span>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="time">9:00 pm</div>
                                            </td>
                                            <td></td>
                                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section Start -->
        <div class="vedio-bg-section fix bg-cover" style="background-image: url(assets/img/home-1/counter/video-img.jpg);">
            <div class="counter-section">
                <div class="container">
                    <div class="counter-wrapper zoom-effect-style">
                        <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/home-1/counter/icon-01.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <h2><span class="odometer" data-count="38">00</span>k</h2>
                                <p>Satisfied Patients</p>
                            </div>
                        </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/home-1/counter/icon-02.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <h2><span class="odometer" data-count="420">00</span></h2>
                                <p>Clinic Rooms</p>
                            </div>
                    </div>
                    <div class="counter-items wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home-1/counter/icon-03.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h2><span class="odometer" data-count="32">00</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>
                        <div class="counter-items wow fadeInUp" data-wow-delay=".8s">
                            <div class="icon">
                                <img src="{{ asset('assets/img/home-1/counter/icon-04.png') }}" alt="img">
                            </div>
                            <div class="content">
                                <h2><span class="odometer" data-count="563">00</span>K</h2>
                                <p>Kinds Of Research</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vedio-wrapper">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=R0mku_PtK1E" class="video-btn ripple video-popup">
                    <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pricing Section5 Start -->
        <section class="pricing-section-5 section-padding fix">
            <div class="shape-1">
                <img src="{{ asset('assets/img/home-5/teeth-2.png') }}" alt="img">
            </div>
            <div class="shape-2 float-bob-y">
                <img src="{{ asset('assets/img/home-5/teeth.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="pricing-wrapper-5">
                    <div class="row g-4">
                      <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="pricing-content">
                            <div class="section-title mb-0">
                            <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR PRICING</span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                Our Affordable Pricing Plan For You
                            </h2>
                        </div>
                        <p class="text wow fadeInUp" data-wow-delay=".5s">
                            Vestibulum sed arcu non euismod odio laci inia at quis, libero nunc consequat interd varius sit amet mattis vulputate eni sito am.
                        </p>
                    </div>
                    </div>
                    <div class="col-xl-7 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-main-card">
                            <div class="row g-0">
                                <div class="col-lg-6 col-md-6">
                                    <div class="pricing-card-item">
                                        <div class="pricing-top">
                                            <h4>Basic Plan</h4>
                                        </div>
                                        <div class="pricing-header">
                                            <div class="header">
                                                <h2>$399</h2>
                                                <span>Monthly</span>
                                            </div>
                                            <p>
                                                In every business year of this company we have created successful.
                                            </p>
                                        </div>
                                        <div class="pdf-button">
                                            <a href="your-file.pdf" download="" class="theme-btn">
                                                Download PDF
                                                <i class="far fa-arrow-down"></i>
                                            </a>
                                        </div>
                                        <ul class="pricing-list">
                                            <li>
                                                <i class="far fa-check"></i>
                                                Dental Bonding
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Smile Makeover
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Metal Braces (Full Treatment)
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Root Canal Treatment
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Growth Method Analysis
                                            </li>
                                        </ul>
                                        <div class="pricing-button">
                                        <a href="pricing.html" class="theme-btn">
                                            <i class="far fa-chevron-right"></i>
                                            Start  Your Plan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                     <div class="pricing-card-item">
                                        <div class="pricing-top style-2">
                                            <h4>Premium Plan</h4>
                                           <span> Save 50%</span>
                                        </div>
                                        <div class="pricing-header">
                                            <div class="header">
                                                <h2>$799</h2>
                                                <span>Monthly</span>
                                            </div>
                                            <p>
                                                In every business year of this company we have created successful.
                                            </p>
                                        </div>
                                        <div class="pdf-button">
                                            <a href="your-file.pdf" download="" class="theme-btn">
                                                Download PDF
                                                <i class="far fa-arrow-down"></i>
                                            </a>
                                        </div>
                                        <ul class="pricing-list">
                                            <li>
                                                <i class="far fa-check"></i>
                                                Dental Bonding
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Smile Makeover
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Metal Braces (Full Treatment)
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Root Canal Treatment
                                            </li>
                                            <li>
                                                <i class="far fa-check"></i>
                                                Growth Method Analysis
                                            </li>
                                        </ul>
                                        <div class="pricing-button">
                                            <a href="pricing.html" class="theme-btn">
                                                <i class="far fa-chevron-right"></i>
                                                Start  Your Plan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section section-padding section-bg  fix">
            <div class="container">
                <div class="section-title-area align-items-end">
                    <div class="section-title">
                        <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">MEET WITH DOCTOR</span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">All On Four Special Offer For <br> Your Physical Treatment</h2>
                    </div>
                    <div class="call-box wow fadeInUp" data-wow-delay=".3s">
                        <div class="call-icon">
                            <img src="{{ asset('assets/img/home-1/cta/call-icon.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <p>Call Emergency</p>
                            <a href="tel:+38002020900">+38 002 0209 00</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 section-padding pb-0 advance-wrap">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-box-items mt-0 advance-item">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/home-1/team/team-01.jpg') }}" alt="img">
                                <span class="post-box">
                                    Orthopedic Surgeon
                                </span>
                            </div>
                            <div class="team-content">
                                <h3><a href="#" >Dr. Daniel Roberts</a></h3>
                                <div class="phone-box">
                                    <i class="fas fa-phone-alt"></i>
                                    <span><b>Appointment</b> : <a href="tel:+38002020900">+38 002 0209 00</a></span>
                                </div>
                                <p>
                                    Globally harness multimedia based & idea-sharing with backend products.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-box-items mt-0 advance-item">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/home-1/team/team-02.jpg') }}" alt="img">
                                <span class="post-box">
                                    Cardiologist Specialist
                                </span>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Dr. James Anderson</a></h3>
                                <div class="phone-box">
                                    <i class="fas fa-phone-alt"></i>
                                    <span><b>Appointment</b> : <a href="#" >+38 002 0209 00</a></span>
                                </div>
                                <p>
                                    Globally harness multimedia based & idea-sharing with backend products.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-box-items mt-0 advance-item">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/home-1/team/team-03.jpg') }}" alt="img">
                                <span class="post-box">
                                    Pediatrician Specialist
                                </span>
                            </div>
                            <div class="team-content">
                                <h3><a href="#" >Dr. Sophia Miller</a></h3>
                                <div class="phone-box">
                                    <i class="fas fa-phone-alt"></i>
                                    <span><b>Appointment</b> : <a href="#" >+38 002 0209 00</a></span>
                                </div>
                                <p>
                                    Globally harness multimedia based & idea-sharing with backend products.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-box-items mt-0 advance-item">
                            <div class="team-image">
                                <img src="{{ asset('assets/img/home-1/team/team-04.jpg') }}" alt="img">
                                <span class="post-box">
                                    Medicine Specialist
                                </span>
                            </div>
                            <div class="team-content">
                                <h3><a href="#" >DR: William John</a></h3>
                                <div class="phone-box">
                                    <i class="fas fa-phone-alt"></i>
                                    <span><b>Appointment</b> : <a href="#" >+38 002 0209 00</a></span>
                                </div>
                                <p>
                                    Globally harness multimedia based & idea-sharing with backend products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-button text-center mt-5 wow fadeInUp" data-wow-delay=".9s">
                    <a href="#" class="theme-btn">
                        <i class="far fa-chevron-right"></i>
                       View Our All Member
                    </a>
                </div>
            </div>
        </section>

        <!-- project Section Start -->
        <section class="project-section section-padding fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR PORTFOLIO</span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Some of Our Recent Work <br> of Our Patient</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="project-items">
                            <div class="project-image">
                                <img src="{{ asset('assets/img/home-1/project/project-01.jpg') }}" alt="img">
                            </div>
                            <div class="project-content">
                                <h6>NEUROLOGY / HEALTHCARE</h6>
                                <h3><a href="#" >Acne-Free in 6 Weeks</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="project-items">
                            <div class="project-image">
                                <img src="{{ asset('assets/img/home-1/project/project-02.jpg') }}" alt="img">
                            </div>
                            <div class="project-content">
                                <h6>STROKE / HEALTHCARE</h6>
                                <h3><a href="#" >Stroke Rehabilitation Success</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="project-items">
                            <div class="project-image">
                                <img src="{{ asset('assets/img/home-1/project/project-03.jpg') }}" alt="img">
                            </div>
                            <div class="project-content">
                                <h6>MEDICAL / SCIENCE</h6>
                                <h3><a href="#" >Early Diagnosis of Asthma</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="project-items">
                            <div class="project-image">
                                <img src="{{ asset('assets/img/home-1/project/project-04.jpg') }}" alt="img">
                            </div>
                            <div class="project-content">
                                <h6>MEDICAL / HEALTHCARE</h6>
                                <h3><a href="#" >Trusted Care for Every Life</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section5 Start -->
        <section class="testimonial-section-1 section-padding pb-0 bg-cover fix" style="background-image: url(assets/img/home-1/testimonial/bg.jpg);">
            <div class="shape float-bob-y">
                <img src="{{ asset('assets/img/home-1/testimonial/vector.png') }}" alt="img">
            </div>
            <div class="shape-2 float-bob-y">
                <img src="{{ asset('assets/img/home-1/testimonial/hand.png') }}" alt="img">
            </div>
            <div class="container">
               <div class="testimonial-wrapper-1">
                     <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="testimonial-image">
                            <img src="{{ asset('assets/img/home-1/testimonial/girl.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="section-title-area">
                             <div class="section-title">
                                <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR TESTIMONIAL</span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                  Our Real Story of Clients
                                </h2>
                            </div>
                            <div class="array-button-2">
                                <button class="array-prev"><i class="fas fa-chevron-left"></i></button>
                                <button class="array-next"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="testimonial-right-item">
                            <div class="swiper testimonial-slider-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                   <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <img src="{{ asset('assets/img/home-1/testimonial/client-1.jpg') }}" alt="img">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                               “The doctors went above and beyond to ensure I received best possible treatment. I am grateful for their dedication & would trust them with my health any day.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>William John</h5>
                                                    <span>Small Business Owner</span>
                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <img src="{{ asset('assets/img/home-1/testimonial/client-2.jpg') }}" alt="img">
                                             <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                “The doctors went above and beyond to ensure I received best possible treatment. I am grateful for their dedication & would trust them with my health any day.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>William John</h5>
                                                    <span>Small Business Owner</span>
                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">
                                            <img src="{{ asset('assets/img/home-1/testimonial/client-3.jpg') }}" alt="img">
                                             <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                “The doctors went above and beyond to ensure I received best possible treatment. I am grateful for their dedication & would trust them with my health any day.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>William John</h5>
                                                    <span>Small Business Owner</span>
                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section-2 section-padding bg-cover fix" style="background-image: url('assets/img/home-2/news/news-bg.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR BLOG</span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Recent Insights, Blog <br> and News From Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-box-items-2">
                            <div class="news-img">
                                <img src="{{ asset('assets/img/home-2/news/news-01.jpg') }}" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-date">
                                    <li>
                                       <i class="fal fa-calendar"></i>
                                        09 May, 2025
                                    </li>
                                    <li>
                                        Business
                                    </li>
                                </ul>
                                <h3><a href="{{'#'}}">The Role of a Website in <br> Building Business Credibility</a></h3>
                                <p>In every business year of this company we have created successful ventures with amazing companies.</p>
                                <a href="{{'#'}}" class="link-btn">More Details
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-box-items-2">
                            <div class="news-img">
                                <img src="{{ asset('assets/img/home-2/news/news-02.jpg') }}" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-date">
                                    <li>
                                       <i class="fal fa-calendar"></i>
                                        09 May, 2025
                                    </li>
                                    <li>
                                        Business
                                    </li>
                                </ul>
                                <h3><a href="{{'#'}}">The Role of a Website in Building Business Credibility</a></h3>
                                <p>In every business year of this company we have created successful ventures with amazing companies.</p>
                                <a href="{{'#'}}" class="link-btn">More Details
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-box-items-2">
                            <div class="news-img">
                                <img src="{{ asset('assets/img/home-2/news/news-03.jpg') }}" alt="img">
                            </div>
                            <div class="news-content">
                                <ul class="post-date">
                                    <li>
                                       <i class="fal fa-calendar"></i>
                                        09 May, 2025
                                    </li>
                                    <li>
                                        Business
                                    </li>
                                </ul>
                                <h3><a href="{{'#'}}">The Role of a Website in Building Business Credibility</a></h3>
                                <p>In every business year of this company we have created successful ventures with amazing companies.</p>
                                <a href="{{'#'}}" class="link-btn">More Details
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download App Section Start -->
        <section class="download-app-section-2 section-padding fix">
            <div class="download-shape-1">
                <img src="{{ asset('assets/img/home-2/feature/shape-01.png') }}" alt="img">
            </div>
            <div class="download-shape-2">
                <img src="{{ asset('assets/img/home-2/feature/shape-02.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="download-app-wrapper-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <div class="download-app-content">
                                <div class="section-title text-start mb-0">
                                    <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR FAQS</span>
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Download Our Mobile App To Get the Best Performance</h2>
                                </div>
                                <p class="download-text wow fadeInUp" data-wow-delay=".2s">A brief statement outlining the purpose and mission of the clinic. This can include the commitment. A brief statement outlining the purpose and mission of the clinic. A brief statement outlining the purpose and mission of the clinic. </p>
                                <ul class="download-list wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Better Performance
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        For Online Checkup
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Video Call Services
                                    </li>
                                </ul>
                                <div class="logo-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="logo-1">
                                        <img src="{{ asset('assets/img/home-1/feature/logo-01.png') }}" alt="img">
                                    </div>
                                    <div class="logo-2">
                                        <img src="{{ asset('assets/img/home-1/feature/logo-02.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="download-app-image">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="download-image-1 style-margin">
                                            <img src="{{ asset('assets/img/home-2/feature/01.png') }}" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="download-image-2">
                                            <img src="{{ asset('assets/img/home-2/feature/02.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Newsletter Section Start -->
        <section class="cta-newsletter-section section-bg-2 fix">
            <div class="container">
                <div class="cta-newsletter-wrapper style-2 text-center">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-xl-10">
                            <div class="section-title  mb-0">
                                <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR NEWSLETTER</span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    Join Our Newsletter to Never Miss Information
                                </h2>
                            </div>
                            <div class="form-content">
                            <form action="#">
                                <input type="text" placeholder="Enter your e-mail">
                                <button class="arrow-icon" type="submit">
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </form>
                            <p>By subscribing, you’re accept <a href="{{'#'}}">Privacy Policy</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="cta-img">
                        <img src="{{ asset('assets/img/home-2/cta-img.png') }}" alt="img">
                    </div>
                    <div class="left-shape">
                        <img src="{{ asset('assets/img/home-2/left-shape.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        @endsection