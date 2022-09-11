@extends('layouts.main')

@section('content')
<main id="tt-pageContent"  class="tt-offset-small">
    <div class="container">
        <div class="tt-messages-layout">
            <div class="row no-gutters">
                <div class="col-md-4 tt-aside" id="js-aside">
                    <a href="#" class="tt-title-aside">
                        <h2 class="tt-title">
                            Messages
                        </h2>
                        <i class="tt-icon">
                            <svg class="icon">
                              <use xlink:href="#icon-pencil"></use>
                            </svg>
                        </i>
                    </a>
                    <div class="tt-all-avatar">
                        <div class="tt-box-search">
                            <input class="tt-input" type="text" placeholder="Search messages">
                            <a href="#" class="tt-btn-input">
                                <svg>
                                  <use xlink:href="#icon-search"></use>
                                </svg>
                            </a>
                            <a href="#" class="tt-btn-icon">
                                <svg class="icon">
                                  <use xlink:href="#icon-filter"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-list-avatar js-init-scroll">
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-t"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Taylor</span> <span class="time">Feb 03</span></h4>
                                    <div class="tt-message tt-select">Taylor: need to see that</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-g"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Green</span> <span class="time">Feb 02</span></h4>
                                    <div class="tt-message tt-select">You: Alright ttyl</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-k"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Kevin</span> <span class="time">Jan 27</span></h4>
                                   <div class="tt-message">You: Business is good, but going a bit..</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-d"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Dylan</span> <span class="time">Jan 24</span></h4>
                                   <div class="tt-message">Dylan: modding fo skyrim</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-p"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Peterson</span> <span class="time">Jan 21</span></h4>
                                   <div class="tt-message">You: Sent you that email</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-s"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Smith</span> <span class="time">Jan 20</span></h4>
                                   <div class="tt-message">You: Let me know about that</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-u"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Usain</span> <span class="time">Jan 18</span></h4>
                                   <div class="tt-message">Usain: Will be online after 2pm</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-l"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Larry</span> <span class="time">Jan 16</span></h4>
                                   <div class="tt-message">Larry: :D</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-j"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Jordan</span> <span class="time">Jan 16</span></h4>
                                   <div class="tt-message">You: Lets catch up later</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Clive</span> <span class="time">Jan 12</span></h4>
                                   <div class="tt-message">Clive: Happy New Yero brother :)</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tt-title-content">
                        <a href="#" class="tt-toggle-aside">
                            <i class="tt-icon">
                                <svg class="icon">
                                  <use xlink:href="#icon-arrow_left"></use>
                                </svg>
                            </i>
                        </a>
                        <h2 class="tt-title">
                            New message
                        </h2>
                    </div>
                    <div class="tt-search-compose">
                        <div class="tt-input">
                            <input type="text" class="tt-search-input" placeholder="Type a name or multiple names">
                        </div>
                        <div class="tt-search-results">
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-t"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Taylor</span></h4>
                                    <div class="tt-value">@tails23</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-k"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Kevin</span></h4>
                                    <div class="tt-value">@kevin27</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-g"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Green</span></h4>
                                    <div class="tt-value">@green63</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-d"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Dylan</span></h4>
                                    <div class="tt-value">@dylan89</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-s"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Smith</span></h4>
                                    <div class="tt-value">@smith45</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-t"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Taylor</span></h4>
                                    <div class="tt-value">@tails23</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-k"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Kevin</span></h4>
                                    <div class="tt-value">@kevin27</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-g"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Green</span></h4>
                                    <div class="tt-value">@green63</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-d"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Dylan</span></h4>
                                    <div class="tt-value">@dylan89</div>
                                </div>
                            </a>
                            <a href="#" class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-ava-s"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h4 class="tt-title"><span>Smith</span></h4>
                                    <div class="tt-value">@smith45</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tt-wrapper-inner">
                        <div class="pt-editor form-default">
                            <div class="pt-row">
                                <div class="col-left">
                                    <ul class="pt-edit-btn">
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-quote"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-bold"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-italic"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-share_topic"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-blockquote"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-performatted"></use>
                                            </svg>
                                        </button></li>
                                        <li class="hr"></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-upload_files"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-bullet_list"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-heading"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-horizontal_line"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-emoticon"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-settings"></use>
                                            </svg>
                                        </button></li>
                                        <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                              <use xlink:href="#icon-color_picker"></use>
                                            </svg>
                                        </button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="5" placeholder="Write your message here"></textarea>
                            </div>
                            <div class="pt-row">
                                <div class="col-auto ml-auto">
                                    <a href="#" class="btn btn-secondary btn-custom">Send</a>
                                </div>
                            </div>
                        </div>
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
