@extends('layouts.main')

@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <div class="tt-tab-wrapper">
            <div class="tt-wrapper-inner">
                <ul class="nav nav-tabs pt-tabs-default" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-01" role="tab"><span>About</span></a>
                    </li>
                    <li class="nav-item show">
                        <a class="nav-link active" data-toggle="tab" href="#tt-tab-02" role="tab"><span>Guidelines</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-03" role="tab"><span>FAQ</span></a>
                    </li>
                    <li class="nav-item tt-hide-xs">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-04" role="tab"><span>Terms of Service</span></a>
                    </li>
                    <li class="nav-item tt-hide-md">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-05" role="tab"><span>Privacy</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="tt-tab-01" role="tabpanel">
                    <div class="tt-layout-tab">
                        <div class="tt-wrapper-inner">
                            <h2 class="tt-title">
                                About Forum 19
                            </h2>
                            Forum 19 is a community of creatives who come together to share ideas and help each other succeed.
                            <h3 class="tt-title">
                                Admins
                            </h3>
                            <div class="tt-list-avatar">
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-n"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Nitish</h6>
                                                <div class="tt-value">@nitish92</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-t"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Taylor</h6>
                                                <div class="tt-value">@tails23</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-k"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Kevin</h6>
                                                <div class="tt-value">@kevin27</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-g"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Green</h6>
                                                <div class="tt-value">@green63</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-d"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Dylan</h6>
                                                <div class="tt-value">@dylan89</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-p"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Peterson</h6>
                                                <div class="tt-value">@dylan89</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="tt-title">
                                Moderators
                            </h4>
                            <div class="tt-list-avatar">
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-a"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">azyrus</h6>
                                                <div class="tt-value">@azyrus21</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-s"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Smith</h6>
                                                <div class="tt-value">@smith45</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-u"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Usain</h6>
                                                <div class="tt-value">@bolt24</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-l"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Larry</h6>
                                                <div class="tt-value">@larry74</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-j"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Jordan</h6>
                                                <div class="tt-value">@jordan36</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-c"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Clive</h6>
                                                <div class="tt-value">@clive45</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-m"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Mitchell</h6>
                                                <div class="tt-value">@mitchell73</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-v"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Vans</h6>
                                                <div class="tt-value">@vans49</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-p"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Baker</h6>
                                                <div class="tt-value">@baker65</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-f"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Foster</h6>
                                                <div class="tt-value">@foster87</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-3">
                                         <a href="#" class="tt-avatar">
                                            <div class="tt-col-icon">
                                                <svg class="tt-icon">
                                                  <use xlink:href="#icon-ava-o"></use>
                                                </svg>
                                            </div>
                                            <div class="tt-col-description">
                                                <h6 class="tt-title">Olly</h6>
                                                <div class="tt-value">@olly39</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive-sm tt-indent-top">
                            <table class="table-01">
                                <caption>Site Statistics</caption>
                                <thead>
                                    <tr>
                                        <th>Topic</th>
                                        <th>All Time</th>
                                        <th>Last 7</th>
                                        <th>Last 30</th>
                                    </tr>
                                </thead>
                                <tbody class="table-zebra">
                                    <tr>
                                        <td>Topics</td>
                                        <td>51.8k</td>
                                        <td>263</td>
                                        <td>1.2k</td>
                                    </tr>
                                    <tr>
                                        <td>Posts</td>
                                        <td>624k</td>
                                        <td>3.9k</td>
                                        <td>15.4k</td>
                                    </tr>
                                    <tr>
                                        <td>Users</td>
                                        <td>123k</td>
                                        <td>698</td>
                                        <td>3.3k</td>
                                    </tr>
                                    <tr>
                                        <td>Active Users</td>
                                        <td>--</td>
                                        <td>2.8k</td>
                                        <td>7.2k</td>
                                    </tr>
                                    <tr>
                                        <td>Likes</td>
                                        <td>224k</td>
                                        <td>2.5k</td>
                                        <td>9.2k</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tt-wrapper-inner tt-indent-top">
                            <h4 class="tt-title">
                                Contact Us
                            </h4>
                            Please feel free to leave us a message at sample@sample.com
                        </div>
                    </div>
                </div>
                <div class="tab-pane show active" id="tt-tab-02" role="tabpanel">
                    <div class="tt-wrapper-inner tt-layout-tab">
                        <h6 class="tt-title tt-size-lg">
                            Community Rules
                        </h6>
                        <p>Envato is a community of creatives who come together to share ideas and help each other succeed.</p>
                        <p>
                            We invite you to join in, but do have a few rules. The rules and values below exist to help you understand what it means to be a member of the community and cover all aspects of community interaction on Envato forums, blogs, contests and events. We’re committed to upholding them, and we hope you will be too.
                        </p>
                        <dl class="dl-layout-01">
                            <dt>We believe when the community succeeds, we succeed.</dt>
                            <dd>
                                We love healthy competition, but feel we’re all better off when we’re sharing ideas, knowledge and skills and helping one another. We come to give back, not shamelessly self-promote.
                            </dd>
                            <dt>
                                We’re a global community of many types of people.
                            </dt>
                            <dd>
                                We are from all corners of the earth and a glorious melting pot of creative fields, skill levels, cultures, religions and more. We think the opportunity for anyone to achieve success no matter where they come from leads to a more meritocratic and equal world.
                            </dd>
                            <dt>
                                We celebrate individuality and embrace diversity.
                            </dt>
                            <dd>
                                We encourage different viewpoints as long as they’re presented in a way that’s constructive and respectful. Personal attacks as well as any behavior that is hateful or offensive based on race, ethnicity, national origin, religion, gender or sexual orientation are not okay.
                            </dd>
                            <dt>
                                We’re excited about and inspired by collaboration.
                            </dt>
                            <dd>
                                By collaborating with people from different backgrounds, we are exposed to new ideas and perspectives that fuel the creative process and innovation.
                            </dd>
                            <dt>
                                We’re always learning because we’re hungry and curious.
                            </dt>
                            <dd>
                                We’re all students and teachers. Our world moves super fast and we stay ahead of the pack by pushing and pulling each other forward. We don’t follow the trends, we make them.
                            </dd>
                        </dl>
                        <h6 class="tt-title">We follow a few hard rules. Please DON’T:</h6>
                        <ul class="tt-list-dot tt-indent-top01">
                            <li>Participate in or encourage personal attacks, call out another user and/or sabotage a user’s item.</li>
                            <li>Discuss politics, pornography, religion or competitive marketplaces.</li>
                            <li>Spam.</li>
                            <li>Troll or flame.</li>
                            <li>Link to freebies in categories of items that are sold on Market.</li>
                            <li>Blatantly self-promote (see A Note on Self-promotion below).</li>
                            <li>Solicit for any kind of material support, donations, aid, etc.</li>
                            <li>Discuss pricing of items/services in an author-driven pricing category or on Studio.</li>
                            <li>Talk about or link to piracy, warez, illegal activity of any kind, or competitor sites or items.</li>
                            <li>Request or post personal (or identifying) information about any user or any other person.</li>
                            <li>Post anything that would infringe on another person’s intellectual property rights.</li>
                        </ul>
                        <p class="tt-indent-top02">
                            We believe all ideas can (and should) be scrutinised, constructively.
                        </p>
                    </div>
                </div>
                <div class="tab-pane" id="tt-tab-03" role="tabpanel">
                    <div class="tt-wrapper-inner tt-layout-tab">
                        tab-content FAQ
                    </div>
                </div>
                <div class="tab-pane" id="tt-tab-04" role="tabpanel">
                    <div class="tt-wrapper-inner tt-layout-tab">
                        tab-content Terms of Service
                    </div>
                </div>
                <div class="tab-pane" id="tt-tab-05" role="tabpanel">
                    <div class="tt-wrapper-inner tt-layout-tab">
                        tab-content 489 Privacy
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div id="js-popup-settings" class="tt-popup-settings">
	<div class="tt-btn-col-close">
		<a href="#">
			<span class="tt-icon-title">
				<svg>
					<use xlink:href="#icon-settings_fill"></use>
				</svg>
			</span>
			<span class="tt-icon-text">
				Settings
			</span>
			<span class="tt-icon-close">
				<svg>
					<use xlink:href="#icon-cancel"></use>
				</svg>
			</span>
		</a>
	</div>
	<form class="form-default">
		<div class="tt-form-upload">
			<div class="row no-gutter">
				<div class="col-auto">
					<div class="tt-avatar">
		                <svg>
		                  <use xlink:href="#icon-ava-d"></use>
		                </svg>
		            </div>
				</div>
				<div class="col-auto ml-auto">
					<a href="#" class="btn btn-primary">Upload Picture</a>
				</div>
			</div>
		</div>
		<div class="form-group">
		    <label for="settingsUserName">Username</label>
		   <input type="text" name="name" class="form-control" id="settingsUserName" placeholder="azyrusmax">
		</div>
		<div class="form-group">
		    <label for="settingsUserEmail">Email</label>
		   <input type="text" name="name" class="form-control" id="settingsUserEmail" placeholder="Sample@sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserPassword">Password</label>
		   <input type="password" name="name" class="form-control" id="settingsUserPassword" placeholder="************">
		</div>
		<div class="form-group">
		    <label for="settingsUserLocation">Location</label>
		   <input type="text" name="name" class="form-control" id="settingsUserLocation" placeholder="Slovakia">
		</div>
		<div class="form-group">
		    <label for="settingsUserWebsite">Website</label>
		   <input type="text" name="name" class="form-control" id="settingsUserWebsite" placeholder="Sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserAbout">About</label>
		    <textarea name="" placeholder="Few words about you" class="form-control" id="settingsUserAbout"></textarea>
		</div>
		<div class="form-group">
			<label for="settingsUserAbout">Notify me via Email</label>
			<div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox01" name="checkbox">
		        <label for="settingsCheckBox01">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone replies to my thread</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox02" name="checkbox">
		        <label for="settingsCheckBox02">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone likes my thread or reply</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox03" name="checkbox">
		        <label for="settingsCheckBox03">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone mentions me</span>
		        </label>
		    </div>
		</div>
		<div class="form-group">
			<a href="#" class="btn btn-secondary">Save</a>
		</div>
		</form>
</div>
<a href="page-create-topic.html" class="tt-btn-create-topic">
    <span class="tt-icon">
        <svg>
          <use xlink:href="#icon-create_new"></use>
        </svg>
    </span>
</a>

<div class="modal fade" id="modalAdvancedSearch" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="tt-modal-advancedSearch">
				<div class="tt-modal-title">
					<i class="pt-icon">
						<svg>
							<use xlink:href="#icon-advanced_search"></use>
						</svg>
					</i>
					Advanced Search
					<a class="pt-close-modal" href="#" data-dismiss="modal">
						<svg class="icon">
							<use xlink:href="#icon-cancel"></use>
						</svg>
					</a>
				</div>
				<form class="form-default">
					<div class="form-group">
						<i class="pt-customInputIcon">
                           <svg class="tt-icon">
                              <use xlink:href="#icon-search"></use>
                            </svg>
                        </i>
						<input type="text" name="name" class="form-control pt-customInputSearch" id="searchForum" placeholder="Search all forums">
					</div>
					<div class="form-group">
						<label for="searchName">Posted by</label>
						<input type="text" name="name" class="form-control" id="searchName" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="searchCategory">In Category</label>
						<input type="text" name="name" class="form-control" id="searchCategory" placeholder="Add Category">
					</div>
					<div class="checkbox-group">
				        <input type="checkbox" id="searcCheckBox01" name="checkbox">
				        <label for="searcCheckBox01">
				            <span class="check"></span>
				            <span class="box"></span>
				            <span class="tt-text">Include all tags</span>
				        </label>
				    </div>
					<div class="form-group">
						<label>Only return topics/posts that...</label>
						<div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox02" name="checkbox">
					        <label for="searcCheckBox02">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I liked</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox03" name="checkbox">
					        <label for="searcCheckBox03">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">are in my messages</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox04" name="checkbox">
					        <label for="searcCheckBox04">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I’ve read</span>
					        </label>
					    </div>
					</div>
					<div class="form-group">
						<select class="form-control" id="searchTop">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchaTopics">Where topics</label>
						<select class="form-control" id="searchaTopics">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchAdvTime">Posted</label>
						<div class="row">
							<div class="col-6">
								<select class="form-control">
									<option>any</option>
									<option>value 01</option>
									<option>value 02</option>
									<option>value 03</option>
								</select>
							</div>
							<div class="col-6">
								<input type="text" name="name" class="form-control" id="searchAdvTime" placeholder="dd-mm-yyyy">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="minPostCount">Minimum Post Count</label>
						<select class="form-control" id="minPostCount">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option selected>10</option>
						</select>
					</div>
					<div class="form-group">
						<a href="#" class="btn btn-secondary btn-block">Search</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
