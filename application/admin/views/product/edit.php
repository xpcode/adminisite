<?php $this->
load->view('/common/header.php'); ?>
<div class="span10" id="content">
	<!-- content starts -->

	<div>
		<ul class="breadcrumb">
			<li>
				<a href="#">Home</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href="#">Forms</a>
			</li>
		</ul>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2> <i class="icon-edit"></i>
					Form Elements
				</h2>
				<div class="box-icon">
					<a class="btn btn-setting btn-round" href="#"> <i class="icon-cog"></i>
					</a>
					<a class="btn btn-minimize btn-round" href="#">
						<i class="icon-chevron-up"></i>
					</a>
					<a class="btn btn-close btn-round" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal">
					<fieldset>
						<legend>Datepicker, Autocomplete, WYSIWYG</legend>
						<div class="control-group">
							<label for="typeahead" class="control-label">Auto complete</label>
							<div class="controls">
								<input type="text" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" data-items="4" data-provide="typeahead" id="typeahead" class="span6 typeahead">
								<p class="help-block">Start typing to activate auto complete!</p>
							</div>
						</div>
						<div class="control-group">
							<label for="date01" class="control-label">Date input</label>
							<div class="controls">
								<input type="text" value="02/16/12" id="date01" class="input-xlarge datepicker hasDatepicker"></div>
						</div>

						<div class="control-group">
							<label for="fileInput" class="control-label">File input</label>
							<div class="controls">
								<div class="uploader" id="uniform-fileInput">
									<input type="file" id="fileInput" class="input-file uniform_on" size="19" style="opacity: 0;">
									<span class="filename" style="-moz-user-select: none;">No file selected</span>
									<span class="action" style="-moz-user-select: none;">Choose File</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label for="textarea2" class="control-label">Textarea WYSIWYG</label>
							<div class="controls">
								<div class="cleditorMain" style="width: 500px; height: 250px;">
									<div class="cleditorToolbar" style="height: 53px;">
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Bold"></div>
											<div class="cleditorButton" title="Italic" style="background-position: -24px center;"></div>
											<div class="cleditorButton" title="Underline" style="background-position: -48px center;"></div>
											<div class="cleditorButton" title="Strikethrough" style="background-position: -72px center;"></div>
											<div class="cleditorButton" title="Subscript" style="background-position: -96px center;"></div>
											<div class="cleditorButton" title="Superscript" style="background-position: -120px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Font" style="background-position: -144px center;"></div>
											<div class="cleditorButton" title="Font Size" style="background-position: -168px center;"></div>
											<div class="cleditorButton" title="Style" style="background-position: -192px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Font Color" style="background-position: -216px center;"></div>
											<div class="cleditorButton" title="Text Highlight Color" style="background-position: -240px center;"></div>
											<div class="cleditorButton" title="Remove Formatting" style="background-position: -264px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Bullets" style="background-position: -288px center;"></div>
											<div class="cleditorButton" title="Numbering" style="background-position: -312px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Outdent" style="background-position: -336px center;"></div>
											<div class="cleditorButton" title="Indent" style="background-position: -360px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Align Text Left" style="background-position: -384px center;"></div>
											<div class="cleditorButton" title="Center" style="background-position: -408px center;"></div>
											<div class="cleditorButton" title="Align Text Right" style="background-position: -432px center;"></div>
											<div class="cleditorButton" title="Justify" style="background-position: -456px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton cleditorDisabled" title="Undo" style="background-position: -480px center;" disabled="disabled"></div>
											<div class="cleditorButton cleditorDisabled" title="Redo" style="background-position: -504px center;" disabled="disabled"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Insert Horizontal Rule" style="background-position: -528px center;"></div>
											<div class="cleditorButton" title="Insert Image" style="background-position: -552px center;"></div>
											<div class="cleditorButton" title="Insert Hyperlink" style="background-position: -576px center; background-color: transparent;"></div>
											<div class="cleditorButton" title="Remove Hyperlink" style="background-position: -600px center; background-color: transparent;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton cleditorDisabled" title="Cut" style="background-position: -624px center;" disabled="disabled"></div>
											<div class="cleditorButton cleditorDisabled" title="Copy" style="background-position: -648px center; background-color: transparent;" disabled="disabled"></div>
											<div class="cleditorButton" title="Paste" style="background-position: -672px center;"></div>
											<div class="cleditorButton" title="Paste as Text" style="background-position: -696px center;"></div>
											<div class="cleditorDivider"></div>
										</div>
										<div class="cleditorGroup">
											<div class="cleditorButton" title="Print" style="background-position: -720px center;"></div>
											<div class="cleditorButton" title="Show Source" style="background-position: -744px center;"></div>
										</div>
									</div>
									<textarea rows="3" id="textarea2" class="cleditor" style="display: none; width: 500px; height: 197px;"></textarea>
									<iframe frameborder="0" src="javascript:true;" style="display: block; width: 500px; height: 197px;"></iframe>
								</div>
							</div>
						</div>
						<div class="form-actions">
							<button class="btn btn-primary" type="submit">Save changes</button>
							<button class="btn" type="reset">Cancel</button>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
		<!--/span-->

	</div>
	<!--/row-->

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					Form Elements
				</h2>
				<div class="box-icon">
					<a class="btn btn-setting btn-round" href="#">
						<i class="icon-cog"></i>
					</a>
					<a class="btn btn-minimize btn-round" href="#">
						<i class="icon-chevron-up"></i>
					</a>
					<a class="btn btn-close btn-round" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label for="focusedInput" class="control-label">Focused input</label>
							<div class="controls">
								<input type="text" value="This is focused…" id="focusedInput" class="input-xlarge focused"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Uneditable input</label>
							<div class="controls">
								<span class="input-xlarge uneditable-input">Some value here</span>
							</div>
						</div>
						<div class="control-group">
							<label for="disabledInput" class="control-label">Disabled input</label>
							<div class="controls">
								<input type="text" disabled="" placeholder="Disabled input here…" id="disabledInput" class="input-xlarge disabled"></div>
						</div>
						<div class="control-group">
							<label for="optionsCheckbox2" class="control-label">Disabled checkbox</label>
							<div class="controls">
								<label class="checkbox">
									<div class="checker disabled" id="uniform-optionsCheckbox2">
										<span>
											<input type="checkbox" disabled="" value="option1" id="optionsCheckbox2" style="opacity: 0;"></span>
									</div>
									This is a disabled checkbox
								</label>
							</div>
						</div>
						<div class="control-group warning">
							<label for="inputWarning" class="control-label">Input with warning</label>
							<div class="controls">
								<input type="text" id="inputWarning">
								<span class="help-inline">Something may have gone wrong</span>
							</div>
						</div>
						<div class="control-group error">
							<label for="inputError" class="control-label">Input with error</label>
							<div class="controls">
								<input type="text" id="inputError">
								<span class="help-inline">Please correct the error</span>
							</div>
						</div>
						<div class="control-group success">
							<label for="inputSuccess" class="control-label">Input with success</label>
							<div class="controls">
								<input type="text" id="inputSuccess">
								<span class="help-inline">Woohoo!</span>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError3" class="control-label">Plain Select</label>
							<div class="controls">
								<select id="selectError3">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError" class="control-label">Modern Select</label>
							<div class="controls">
								<select data-rel="chosen" id="selectError" style="display: none;" class="chzn-done">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								</select>
								<div id="selectError_chzn" class="chzn-container chzn-container-single" style="width: 220px;">
									<a class="chzn-single" href="javascript:void(0)">
										<span>Option 1</span>
										<div> <b></b>
										</div>
									</a>
									<div style="left: -9000px; width: 218px; top: 25px;" class="chzn-drop">
										<div class="chzn-search">
											<input type="text" autocomplete="off" style="width: 183px;"></div>
										<ul class="chzn-results">
											<li style="" class="active-result result-selected" id="selectError_chzn_o_0">Option 1</li>
											<li style="" class="active-result" id="selectError_chzn_o_1">Option 2</li>
											<li style="" class="active-result" id="selectError_chzn_o_2">Option 3</li>
											<li style="" class="active-result" id="selectError_chzn_o_3">Option 4</li>
											<li style="" class="active-result" id="selectError_chzn_o_4">Option 5</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError1" class="control-label">Multiple Select / Tags</label>
							<div class="controls">
								<select data-rel="chosen" multiple="" id="selectError1" style="display: none;" class="chzn-done">
									<option>Option 1</option>
									<option selected="">Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								</select>
								<div id="selectError1_chzn" class="chzn-container chzn-container-multi" style="width: 220px;">
									<ul class="chzn-choices">
										<li id="selectError1_chzn_c_1" class="search-choice">
											<span>Option 2</span>
											<a rel="1" class="search-choice-close" href="javascript:void(0)"></a>
										</li>
										<li class="search-field">
											<input type="text" style="width: 25px;" autocomplete="off" class="" value="Select Some Options"></li>
									</ul>
									<div style="left: -9000px; width: 218px; top: 29px;" class="chzn-drop">
										<ul class="chzn-results">
											<li style="" class="active-result" id="selectError1_chzn_o_0">Option 1</li>
											<li style="" class="result-selected" id="selectError1_chzn_o_1">Option 2</li>
											<li style="" class="active-result" id="selectError1_chzn_o_2">Option 3</li>
											<li style="" class="active-result" id="selectError1_chzn_o_3">Option 4</li>
											<li style="" class="active-result" id="selectError1_chzn_o_4">Option 5</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label for="selectError2" class="control-label">Group Select</label>
							<div class="controls">
								<select data-rel="chosen" id="selectError2" data-placeholder="Your Favorite Football Team" style="display: none;" class="chzn-done">
									<option value=""></option>
									<optgroup label="NFC EAST">
										<option>Dallas Cowboys</option>
										<option>New York Giants</option>
										<option>Philadelphia Eagles</option>
										<option>Washington Redskins</option>
									</optgroup>
									<optgroup label="NFC NORTH">
										<option>Chicago Bears</option>
										<option>Detroit Lions</option>
										<option>Green Bay Packers</option>
										<option>Minnesota Vikings</option>
									</optgroup>
									<optgroup label="NFC SOUTH">
										<option>Atlanta Falcons</option>
										<option>Carolina Panthers</option>
										<option>New Orleans Saints</option>
										<option>Tampa Bay Buccaneers</option>
									</optgroup>
									<optgroup label="NFC WEST">
										<option>Arizona Cardinals</option>
										<option>St. Louis Rams</option>
										<option>San Francisco 49ers</option>
										<option>Seattle Seahawks</option>
									</optgroup>
									<optgroup label="AFC EAST">
										<option>Buffalo Bills</option>
										<option>Miami Dolphins</option>
										<option>New England Patriots</option>
										<option>New York Jets</option>
									</optgroup>
									<optgroup label="AFC NORTH">
										<option>Baltimore Ravens</option>
										<option>Cincinnati Bengals</option>
										<option>Cleveland Browns</option>
										<option>Pittsburgh Steelers</option>
									</optgroup>
									<optgroup label="AFC SOUTH">
										<option>Houston Texans</option>
										<option>Indianapolis Colts</option>
										<option>Jacksonville Jaguars</option>
										<option>Tennessee Titans</option>
									</optgroup>
									<optgroup label="AFC WEST">
										<option>Denver Broncos</option>
										<option>Kansas City Chiefs</option>
										<option>Oakland Raiders</option>
										<option>San Diego Chargers</option>
									</optgroup>
								</select>
								<div id="selectError2_chzn" class="chzn-container chzn-container-single" style="width: 220px;">
									<a class="chzn-single chzn-default" href="javascript:void(0)">
										<span>Your Favorite Football Team</span>
										<div> <b></b>
										</div>
									</a>
									<div style="left: -9000px; width: 218px; top: 25px;" class="chzn-drop">
										<div class="chzn-search">
											<input type="text" autocomplete="off" style="width: 183px;"></div>
										<ul class="chzn-results">
											<li class="group-result" id="selectError2_chzn_g_1">NFC EAST</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_2">Dallas Cowboys</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_3">New York Giants</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_4">Philadelphia Eagles</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_5">Washington Redskins</li>
											<li class="group-result" id="selectError2_chzn_g_6">NFC NORTH</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_7">Chicago Bears</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_8">Detroit Lions</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_9">Green Bay Packers</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_10">Minnesota Vikings</li>
											<li class="group-result" id="selectError2_chzn_g_11">NFC SOUTH</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_12">Atlanta Falcons</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_13">Carolina Panthers</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_14">New Orleans Saints</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_15">Tampa Bay Buccaneers</li>
											<li class="group-result" id="selectError2_chzn_g_16">NFC WEST</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_17">Arizona Cardinals</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_18">St. Louis Rams</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_19">San Francisco 49ers</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_20">Seattle Seahawks</li>
											<li class="group-result" id="selectError2_chzn_g_21">AFC EAST</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_22">Buffalo Bills</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_23">Miami Dolphins</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_24">New England Patriots</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_25">New York Jets</li>
											<li class="group-result" id="selectError2_chzn_g_26">AFC NORTH</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_27">Baltimore Ravens</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_28">Cincinnati Bengals</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_29">Cleveland Browns</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_30">Pittsburgh Steelers</li>
											<li class="group-result" id="selectError2_chzn_g_31">AFC SOUTH</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_32">Houston Texans</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_33">Indianapolis Colts</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_34">Jacksonville Jaguars</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_35">Tennessee Titans</li>
											<li class="group-result" id="selectError2_chzn_g_36">AFC WEST</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_37">Denver Broncos</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_38">Kansas City Chiefs</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_39">Oakland Raiders</li>
											<li style="" class="active-result group-option" id="selectError2_chzn_o_40">San Diego Chargers</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="form-actions">
							<button class="btn btn-primary" type="submit">Save changes</button>
							<button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
		<!--/span-->

	</div>
	<!--/row-->

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div data-original-title="" class="box-header well">
				<h2>
					<i class="icon-edit"></i>
					Form Elements
				</h2>
				<div class="box-icon">
					<a class="btn btn-setting btn-round" href="#">
						<i class="icon-cog"></i>
					</a>
					<a class="btn btn-minimize btn-round" href="#">
						<i class="icon-chevron-up"></i>
					</a>
					<a class="btn btn-close btn-round" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label for="prependedInput" class="control-label">Prepended text</label>
							<div class="controls">
								<div class="input-prepend">
									<span class="add-on">@</span>
									<input type="text" size="16" id="prependedInput"></div>
								<p class="help-block">Here's some help text</p>
							</div>
						</div>
						<div class="control-group">
							<label for="appendedInput" class="control-label">Appended text</label>
							<div class="controls">
								<div class="input-append">
									<input type="text" size="16" id="appendedInput">
									<span class="add-on">.00</span>
								</div>
								<span class="help-inline">Here's more help text</span>
							</div>
						</div>
						<div class="control-group">
							<label for="appendedPrependedInput" class="control-label">Append and prepend</label>
							<div class="controls">
								<div class="input-prepend input-append">
									<span class="add-on">$</span>
									<input type="text" size="16" id="appendedPrependedInput">
									<span class="add-on">.00</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label for="appendedInputButton" class="control-label">Append with button</label>
							<div class="controls">
								<div class="input-append">
									<input type="text" size="16" id="appendedInputButton">
									<button type="button" class="btn">Go!</button>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label for="appendedInputButtons" class="control-label">Two-button append</label>
							<div class="controls">
								<div class="input-append">
									<input type="text" size="16" id="appendedInputButtons">
									<button type="button" class="btn">Search</button>
									<button type="button" class="btn">Options</button>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Checkboxes</label>
							<div class="controls">
								<label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox1">
										<span>
											<input type="checkbox" value="option1" id="inlineCheckbox1" style="opacity: 0;"></span>
									</div>
									Option 1
								</label>
								<label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox2">
										<span>
											<input type="checkbox" value="option2" id="inlineCheckbox2" style="opacity: 0;"></span>
									</div>
									Option 2
								</label>
								<label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox3">
										<span>
											<input type="checkbox" value="option3" id="inlineCheckbox3" style="opacity: 0;"></span>
									</div>
									Option 3
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">File Upload</label>
							<div class="controls">
								<div class="uploader" id="uniform-undefined">
									<input type="file" size="19" style="opacity: 0;">
									<span class="filename" style="-moz-user-select: none;">No file selected</span>
									<span class="action" style="-moz-user-select: none;">Choose File</span>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Radio buttons</label>
							<div class="controls">
								<label class="radio">
									<div class="radio" id="uniform-optionsRadios1">
										<span class="checked">
											<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios" style="opacity: 0;"></span>
									</div>
									Option one is this and that&mdash;be sure to include why it's great
								</label>
								<div style="clear:both"></div>
								<label class="radio">
									<div class="radio" id="uniform-optionsRadios2">
										<span>
											<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios" style="opacity: 0;"></span>
									</div>
									Option two can be something else and selecting it will deselect option one
								</label>
							</div>
						</div>
						<div class="form-actions">
							<button class="btn btn-primary" type="submit">Save changes</button>
							<button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<!--/span-->

	</div>
	<!--/row-->

	<!-- content ends -->
</div>

<?php $this->
load->view('/common/footer.php'); ?>