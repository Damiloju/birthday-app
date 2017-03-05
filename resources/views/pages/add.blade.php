@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <form class="form-horizontal" role="form" action="add/new" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">Name</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" id="name" class="form-control" placeholder="Enter student's name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="month">Month</label>
                    <div class="col-sm-10">
                        <select id="month" name="month" class="form-control">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="day">Day</label>
                    <div class="col-sm-10">
                        <select id="day" name="day" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="level">Level</label>
                    <div class="col-sm-10">
                        <select id="level" name="level" class="form-control">
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right" >Submit</button>
            </form>
        </div>
        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop