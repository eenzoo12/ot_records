<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<br>
<div class="row">
    <div class="col-md-2">
        @if(Auth::user()->position_id==5 || Auth::user()->position_id==6 || Auth::user()->position_id==7 || Auth::user()->position_id==8 )
        <form id="xportdta" action="{{ url('xport') }}" method="GET">
                <button type="submit" class="btn btn-success" style="width:120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp; EXPORT</button>
                <input type="hidden" name="otfrom" id="otfrom_x">
                <input type="hidden" name="otto" id="otto_x"> 
                <input type="hidden" name="shift" id="shift_x">
                <input type="hidden" name="approval" id="approval_x">
        </form>  
        @endif
    </div>
    <div class="col-md-8">
        <form id="searchHrForm" action="" method="POST" >
            <div class="input-group">
                <div data-v-29a3ebe0="" id="" class="input-group-text">FROM :</div>
                <input type="date" id="otfrom_s" name="otfrom" value="2020-01-01" class="form-control" required>
                <div data-v-29a3ebe0="" id="" class="input-group-text">TO :</div>
                <input type="date" id="otto_s" name="otto" value="2020-01-15" class="form-control" required>
                <select name="shift" id="shift_s" class="form-control" style="width:10px;" required>
                    <option value="1">DAY</option> 
                    <option value="2">NIGHT</option>
                    <option value="3" selected="selected">ALL SHIFT</option>
                </select>
                <select name="approval" id="approval_s" class="form-control" required>
                    <option value="1">APPROVED</option> 
                    <option value="2">DECLINED</option>
                    <option value="3">IN PROGRESS</option>
                    <option value="4" selected="selected">ALL REQUEST</option>
                </select>
                <button type="submit" id="date-search-button">Go</button>
            </div>
        </form>
    </div> 
        
    <div class="col-md-2">
        <form id="searchNForm" method="POST">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="search" class="form-control" name="txtname"
                    placeholder="Search name.." > <span class="input-group-btn"></span>
                <button type="submit" id="sn-search-button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
</div>
<br>
<div class="col-md-5">
    <div class="input-group">
        <input type="color" value="#00b33c" class="form-control" style="border-color: transparent; background-color:transparent" disabled>
        <label style="margin-top:5px;">Approved</label>
        <input type="color" value="#ff3333" class="form-control" style="border-color: transparent; background-color:transparent" disabled>
        <label style="margin-top:5px;">Declined</label>
        <input type="color" value="#00ace6" class="form-control" style="border-color: transparent; background-color:transparent" disabled>
        <label style="margin-top:5px;">In Progress</label>
    </div>
</div>

    <div id="HrTable">
        {{-- HR TABLE IN JS --}}
    </div>
