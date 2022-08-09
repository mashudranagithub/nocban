<?php $this->load->view('components/page-head'); ?>

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1><?php if($this->uri->segment(3)=="asianGames"){echo "Asian Games";} elseif($this->uri->segment(3)=="asianBeachGames"){echo "Asian Beach Games";} elseif($this->uri->segment(3)=="asianYouthGames"){echo "Asian Youth Games";} elseif($this->uri->segment(3)=="commonWealthGames"){echo "Common Wealth Games";} elseif($this->uri->segment(3)=="commonWealthYouthGames"){echo "Common Wealth Youth Games";} elseif($this->uri->segment(3)=="islamicSolidarityGames"){echo "Islamic Solidarity Games";} elseif($this->uri->segment(3)=="summerOlympicGames"){echo "Summer Olympic Games";} elseif($this->uri->segment(3)=="youthOlympicGames"){echo "Youth Olympic Games";} elseif($this->uri->segment(3)=="southAsianGames"){echo "South Asian Games";} elseif($this->uri->segment(3)=="southAsianBeachGames"){echo "South Asian Beach Games";}?></h1>
    </div>
</section>
<!-- End Section Title --> 

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="crumbs">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('welcome/index')?>">Home</a></li>
                <li>/</li>
                <li><a href="<?php echo site_url('welcome/page/international')?>">International News</a></li>
                <li>/</li>
                <li><?php if($this->uri->segment(3)=="asianGames"){echo "Asian Games";} elseif($this->uri->segment(3)=="asianBeachGames"){echo "Asian Beach Games";} elseif($this->uri->segment(3)=="asianYouthGames"){echo "Asian Youth Games";} elseif($this->uri->segment(3)=="commonWealthGames"){echo "Common Wealth Games";} elseif($this->uri->segment(3)=="commonWealthYouthGames"){echo "Common Wealth Youth Games";} elseif($this->uri->segment(3)=="islamicSolidarityGames"){echo "Islamic Solidarity Games";} elseif($this->uri->segment(3)=="summerOlympicGames"){echo "Summer Olympic Games";} elseif($this->uri->segment(3)=="youthOlympicGames"){echo "Youth Olympic Games";} elseif($this->uri->segment(3)=="southAsianGames"){echo "South Asian Games";} elseif($this->uri->segment(3)=="southAsianBeachGames"){echo "South Asian Beach Games";}?></li>
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="<?php echo site_url('img/img-theme/shp.png');?>" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- content Column Left -->
            <div class="col-md-12">                     
                <!-- Recent Post -->
                <div class="panel-box">

                    <div class="titles">
                        <h4><?php if($this->uri->segment(3)=="asianGames"){echo "Asian Games";} elseif($this->uri->segment(3)=="asianBeachGames"){echo "Asian Beach Games";} elseif($this->uri->segment(3)=="asianYouthGames"){echo "Asian Youth Games";} elseif($this->uri->segment(3)=="commonWealthGames"){echo "Common Wealth Games";} elseif($this->uri->segment(3)=="commonWealthYouthGames"){echo "Common Wealth Youth Games";} elseif($this->uri->segment(3)=="islamicSolidarityGames"){echo "Islamic Solidarity Games";} elseif($this->uri->segment(3)=="summerOlympicGames"){echo "Summer Olympic Games";} elseif($this->uri->segment(3)=="youthOlympicGames"){echo "Youth Olympic Games";} elseif($this->uri->segment(3)=="southAsianGames"){echo "South Asian Games";} elseif($this->uri->segment(3)=="southAsianBeachGames"){echo "South Asian Beach Games";}?></h4>
                    </div>
                    <?php if($newss){foreach ($newss as $news){?>        
                    <!-- Post Item -->
                    <div class="post-item">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><a href="<?php echo site_url('welcome/post/'.$news->id)?>"><?php echo $news->title?></a></h4>
                                <p class="data-info">
                                    <?php
                                        $yrdata= strtotime($news->date);
                                        echo date('F d Y', $yrdata);
                                    ?>
                                </p>
                            </div>
                       </div>
                    </div>
                    <!-- End Post Item -->
                    <?php }} ?>
                </div>  
                <!-- End Recent Post --> 

                <!-- Pagination -->
                <?php echo $links;?>
                <!-- End Pagination -->
            </div>
             <!-- End content Left -->
        </div>                     
    </div>  
    <!-- End Content Central -->
</section>
<!-- End Section Area -  Content Central -->

<?php $this->load->view('components/page-tail'); ?>