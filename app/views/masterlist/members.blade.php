@extends('includes.layout')

@section('content')

    <div class="main">

        <div class="non-shortable-content">
            <h1><?=$local?> Members</h1>
            <h6>Click a member to view their contact details</h6>
        </div>

        <div class="shortable-content">

            <div class="box _75">
                <div class="box-header">
                    Select Profile Here...
                </div>

                <div class="box-content" >

                    <div id="contact_list">
                        <div class="slider-content">
                            <ul>
                                <li id="a"><a name="a" class="title">A</a>
                                    <ul>
                                        <li>
                                            <a href="{{action('MasterlistController@getProfile', ['local' => $local, 'member' => '1'])}}">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Aaron Avery
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="b"><a name="b" class="title">B</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Baker Terry
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="c"><a name="c" class="title">c</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Cadman Mosley
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="d"><a name="d" class="title">d</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Dalton Chaney
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="e"><a name="e" class="title">E</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Eden Davenport
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face2.png"></span> Eden Montgomery
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="f"><a name="f" class="title">f</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Fitzgerald Blair
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="g"><a name="g" class="title">g</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Gary Clark
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="h"><a name="h" class="title">h</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Herman Kim
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="i"><a name="i" class="title">i</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Ima Moses
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="j"><a name="j" class="title">j</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Jasper Pennington
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="k"><a name="k" class="title">k</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Kiara Beck
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="l"><a name="l" class="title">l</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Liberty Branch
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="m"><a name="m" class="title">m</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Melyssa Pennington
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="n"><a name="n" class="title">n</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Nasim Gardner
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="o"><a name="o" class="title">o</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Octavius Sullivan
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="p"><a name="p" class="title">p</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Patricia Hammond
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="q"><a name="q" class="title">q</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Quinn Deleon
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="r"><a name="r" class="title">r</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Ramona Finch
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="s"><a name="s" class="title">s</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Signe Castillo
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="t"><a name="t" class="title">t</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Tamara Cobb
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="u"><a name="u" class="title">u</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Ulla Cash
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="v"><a name="v" class="title">v</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Vanna Giles
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="w"><a name="w" class="title">w</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Wade Moran
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="x"><a name="x" class="title">x</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Xenos Finch
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="y"><a name="y" class="title">y</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Yolanda Albert
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li id="z"><a name="z" class="title">z</a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="thumbnail"><img src="../images/face/face1.png"></span> Zelenia Swanson
                                                <span class="small">Creative Director</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div><!--CONTACT LIST BOX-->

        </div><!--SHORTABLECONTENT-ENDS-->

    </div><!--MAIN ENDS-->

@stop
