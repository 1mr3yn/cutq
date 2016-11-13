@extends('layouts.main')

@section('content')
 <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          PLDT  - Better Customer Experience
          <small>v 1.0</small>
        </h1>
      </section>
       <section class="content">
        <div class="row">
          <hr>
           <?php
            $tree = [
              'billing' => [
                'title' => 'Billing',
                'subtitle'=>'billing concerns',
                'color'=> 'bg-blue',
                'icon' => 'fa-dollar',
                'key' => "ww1",//w = 0.5 second, w= wait 1 second before we input this key
                'kids'  => [
                  ['title' => 'Outstanding Balance','key'=>"w1"],
                  [
                    'title' => 'Last Payment / other concerns',
                    'subtitle'=> 'report your last payment made',
                    'key'=>"ww2",
              
                  ]
                ]
              ],
              'repair'  =>[
                'title' => 'Technical Assistance',
                'subtitle'=>'repairs and technical assistance',
                'color'=> 'bg-green',
                'icon' => 'fa-wrench',
                'key'=>"ww2",
                'kids'  => [
                  [
                    'title' => 'Broadband',
                    'subtitle'=>'broadband and other data',
                    'key'=>"ww1",
                  ],
                  [
                    'title' => 'Landline', 
                    'subtitle'=> 'landline services',
                    'key'=>"ww2",
                    'kids' => [
                      [ 
                        'title'=> 'Internet service concerns',
                        'subtitle'=>'slow and intermittent internet or browsing problems',
                        'key'=>"ww1",
                      ],
                      [
                        'title'=> 'No dial tone',
                        'subtitle'=>'noisy line or difficulties in making outgoing or receiving incoming calls',
                        'key'=>"ww2",
                        'kids'  => [
                          ['title' => 'no dialtone ','subtitle'=>'','key'=>"ww1"],
                          ['title' => 'cannot make or receive calls','subtitle'=>'','key'=>"ww2",],
                          ['title' => 'line is noisy','subtitle'=>'','key'=>"ww3",],
                          ['title' => 'cannot call non pldt','subtitle'=>'','key'=>"ww4",],
                          ['title' => 'defective unit','subtitle'=>'','key'=>"ww5",],
                        ]
                      ],

                    ]
                  ]
                ]
              ],
              'product_info'=>[
                'title' => 'Product Information',
                'subtitle'=>'product info and after sales requests',
                'color'=> 'bg-yellow',
                'icon' => 'fa-info',
                'key'=>"ww3",
                'kids'  => [
                  [
                    'title' => 'PLDT products and services',
                    'subtitle'=>'',
                    'key'=>"ww1",
                    'kids' => [
                      [ 
                        'title'=>'Residential Product and Services',
                        'subtitle'=>'',
                        'key'=>"ww1",
                        'kids'  => [
                          ['title'=>'Quadplay','subtitle' =>'','key'=>"ww1",],
                          ['title'=>'PLDT Landline Services','subtitle' =>'','key'=>"ww2",],
                          ['title'=>'PLDT MyDSL','subtitle' =>'','key'=>"ww3",],
                          ['title'=>'wireless landline','subtitle' =>'','key'=>"ww4",],
                          ['title'=>'Telpad','subtitle' =>'','key'=>"ww5",],
                          ['title'=>'Other products','subtitle' =>'visit PLDT website'],

                        ]
                      ],
                      [ 
                        'title'=>'Business Product and Services',
                        'subtitle'=>'',
                        'key'=>'ww2',
                        'kids'  => [
                          ['title'=>'PLDT Ka-Asenso','subtitle' =>'','key'=>"ww1",],
                          ['title'=>'PLDT Call All','subtitle' =>'','key'=>"ww3",],
                          ['title'=>'Other products','subtitle' =>'visit PLDT website'],

                        ]
                      ],

                    ]
                  ],
                  [
                    'title' => 'Transfer, activation and other after sales service',
                    'subtitle'=>'Request for transfer of service, activation of landline special features and other aftersales requests',
                    'key'=>"ww2",
                  ],
                  [ 
                    'title' => 'PO location, area code and other general information',
                    'subtitle'=>'Inquire',
                    'key'=>"ww3",
                  ],

           
                ]
              ]
            ];

          ?>
          <ul class='menu'>
          @foreach($tree as $items)
            <li>
              <a {{ array_key_exists('key',$items) ? "data-key=".$items['key'] : "" }}>
                <div class="col-lg-4 col-xs-6">
                  <div class="info-box {{ $items['color'] }}">
                    <span class="info-box-icon"><i class="fa {{ $items['icon'] }}"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-number">{{ $items['title'] }}</span>
                        <span class="progress-description">
                          {{ $items['subtitle'] }}
                        </span>
                    </div>
                  </div>
                </div>
              </a>  
              <ul>
              @foreach($items['kids'] as $kid)
                  <li>
                    <a {{ array_key_exists('key',$kid) ? "data-key=".$items['key'].$kid['key'] : "" }}>
                      <div class="col-lg-4 col-xs-6">
                        <div class="info-box {{ $items['color'] }}">
                          <span class="info-box-icon"><i class="fa {{ $items['icon'] }}"></i></span>

                          <div class="info-box-content">
                          <span class="info-box-number">{{ $kid['title'] }}</span>
                              <span class="progress-description">
                                {{ array_key_exists('subtitle',$kid) ? $kid['subtitle'] : "" }}
                              </span>
                          </div>
                        </div>
                      </div>
                    </a>
                  @if(array_key_exists('kids',$kid))
                    <ul>
                      @foreach($kid['kids'] as $kids2 )
                        <li>
                          <a {{ array_key_exists('key',$kids2) ? "data-key=".$items['key'].$kid['key'].$kids2['key'] : "" }}>
                            <div class="col-lg-4 col-xs-6">
                              <div class="info-box {{ $items['color'] }}">
                                <span class="info-box-icon"><i class="fa {{ $items['icon'] }}"></i></span>

                                <div class="info-box-content">
                                <span class="info-box-number">{{ $kids2['title'] }}</span>
                                    <span class="progress-description">
                                      {{ $kids2['subtitle'] }}
                                    </span>
                                </div>
                              </div>
                            </div>
                          </a>
                          @if(array_key_exists('kids',$kids2))
                            <ul>
                              @foreach($kids2['kids'] as $kids3 )
                                <li>
                                  <a {{ array_key_exists('key',$kids3) ? "data-key=".$items['key'].$kid['key'].$kids2['key'].$kids3['key'] : "" }} >
                                    <div class="col-lg-4 col-xs-6">
                                      <div class="info-box {{ $items['color'] }}">
                                        <span class="info-box-icon"><i class="fa {{ $items['icon'] }}"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-number">{{ $kids3['title'] }}</span>
                                            <span class="progress-description">
                                              {{ $kids3['subtitle'] }}
                                            </span>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                </li>  
                              @endforeach
                            </ul>
                          @endif
                        </li>
                      @endforeach
                    </ul>
                  @endif  
                </li>
              @endforeach
              </ul>

            </li>
          @endforeach
          </ul>              
       </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <style>
    ul li ul {display:none;}
    ul {list-style:none;}
  </style>    


@stop  
      
@section('js')
<script type="text/javascript">
    $(document).ready(function(){


      $(document).delegate("ul.menu li","click",function(){
        var li = $(this);
        if(li.find('ul').length >0){          
          $("ul.menu").hide().html("");
          $("ul.menu").html( $("<div>"+ li.find('ul').first().html()+"</div>").html()).fadeIn('normal');
        }else{
          //we might be on the last step
          console.log(li.find("a").data('key'));
          window.location.href = "/call?digits="+li.find("a").data('key');
        }

      });
    });
    
  </script>
@stop


