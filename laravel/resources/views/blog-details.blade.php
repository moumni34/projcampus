<?php $page="blog-details";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')   
@slot('title') Home @endslot
@slot('li1') Pages @endslot
@slot('li2') Blog Details @endslot 
@endcomponent
<!-- Blog Details -->
<section class="course-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">

                <!-- Blog Post -->
                <div class="blog">
                    <div class="blog-image">
                        <a href="{{url('blog-details')}}"><img class="img-fluid" src="{{ URL::asset('/assets/img/blog-banner.jpg')}}" alt="Post Image"></a>
                    </div>
                    <div class="blog-info clearfix">
                        <div class="post-left">
                            <ul>
                                <li>
                                    <div class="post-author">
                                        <a href="{{url('instructor-profile')}}"><img src="{{ URL::asset('/assets/img/user/user.jpg')}}" alt="Post Author"> <span>Ruby Perrin</span></a>
                                    </div>
                                </li>
                                <li><img class="img-fluid" src="{{ URL::asset('/assets/img/icon/icon-22.svg')}}" alt="">April 20, 2022</li>
                                <li><img class="img-fluid" src="{{ URL::asset('/assets/img/icon/icon-23.svg')}}" alt="">Programming, Web Design</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="blog-title"><a href="{{url('blog-details')}}">Learn Webs Applications Development from Experts</a></h3>
                    <div class="blog-content">
                        <p>When working on a new piece of software, it’s essential to craft a software design document to create a clear and precise vision of the client’s problem and your proposed solution. Software design documents are important for detailing expectations between the software engineer and the client. They help to streamline the coding process before any code is written.</p>
                        <p>Read on to learn how to write great software design documents that improve communication between you and your client, ensuring that everyone is on the same page when working on a project together.</p>
                        <h4>What Is a Software Design Document?</h4>
                        <p>Before starting a new project with the client, the planning stage involves having a clear vision and agreeing upon design goals. These goals should be laid out in a technical specification document called a software design document.</p>
                        <p>A software developer is usually responsible for creating the software design document. The developer will gather information from a client who wants a new piece of software built and then they will make a document that details the proposed solutions to the client's problems.</p>
                        <h4>What to Include in Your Software Design Document</h4>
                        <p>Problems within the coding world tend to vary, and engineering teams and developers often write design documents differently. However, there is a certain software design document template that you can follow to help you include all of the essential pieces of information.</p>
                        <p>Here are some factors you should include:</p>
                        <p><strong>Key information:</strong> The title of the document, who’s working on the project, and the date the document was last updated.</p>
                        <p><strong>Overview:</strong> A complete high-level summary of the project that helps the company decide if they should continue reading the rest of the document.</p>
                        <p><strong>Pain points:</strong> A complete description of the problems and challenges, alongside why this project is important. Furthermore, it’s essential to include how it fits in with product and technical strategies.</p>
                        <p><strong>Goals:</strong> Accurately describe the users of the project and their impact. In certain cases, the users may be another engineering team. It’s also important to be clear on how to measure the success of metrics in conjunction with goals and which KPIs will be used to track success. Lastly, it’s essential to state which problems you won’t be fixing so that everyone who has read the document understands what you will and will not be working on.</p>
                        <p><strong>Project milestones:</strong> Milestones in any project serve as a list of measurable checkpoints, helping to break the entire project down into small parts. A timeline and milestones can be used internally to help keep engineers on track and show the client how the project will progress towards completion.</p>
                        <p><strong>Prioritization:</strong> After breaking the project down into smaller features, it’s good to rank them in order of priority. The simplest way to do this is to plot each feature in the project onto a prioritization matrix based on urgency and impact.</p>
                        <p><strong>Solutions:</strong> Detail the current and proposed solutions to the client’s problem. In this section, you’ll want to include what the existing solution is (if any) and how users interact with that solution. The second part of this section is to outline your proposed solution in as much detail as possible. It must be easy to understand—another engineer should be able to read and build your proposed solution without any prior knowledge of the project.</p>
                        <h4>How to Create a Software Design Document</h4>
                        <p>Keeping the above criteria in mind when creating your software design document is a great start. To really maximize efficiency and communication, there are a few best practices to implement.</p>
                        <p>Firstly, keep your language as simple as possible. The key is clarity — especially when it comes to detailing technical points. Include visuals into your document, helping readers accurately understand the points and data you’re trying to convey. Diagrams, charts, and other timelines are a great way to communicate information.</p>
                        <p>Send a draft of your document to the client, so they can catch parts you may have missed or areas that are unclear and need fleshing out. Lastly, it’s important to update your document as the project progresses, as you and other team members should be consistently referencing the document.</p>
                        <p>When working on a new piece of software, it’s essential to craft a software design document to create a clear and precise vision of the client’s problem and your proposed solution. Software design documents are important for detailing expectations between the software engineer and the client. They help to streamline the coding process before any code is written.</p>
                        <p class="mb-0">Read on to learn how to write great software design documents that improve communication between you and your client, ensuring that everyone is on the same page when working on a project together.</p>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            
            @component('components.blogsidebar')    
            @endcomponent
            
        </div>
    </div>
</section>
<!-- /Blog Details -->
@endsection