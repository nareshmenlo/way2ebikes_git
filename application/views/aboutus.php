
<div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><?php echo is_eng_language()?"HOME":"హోమ్"; ?></a></li>
                        <li class="active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <!-- Block -->
        <div class="block bottom-sm">
            <div class="container">
                <h2 class="h-lg text-center"><span class="color"><?php echo is_eng_language()?"ABOUT US":"మా గురించి"; ?></span></h2>                
            </div>
        </div>
        <div class="block bg-4">
            <div class="container">
                <div class="row  animation" data-animation="fadeInRight" data-animation-delay=".25s">
                    <!-- <div class="col-sm-12">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5 ">
                            <ul class="marker-list"><li>
                            We strive to spread the Divine message to one and all.</li><li>
                            Our aim is to spread teachings and messages of Sri Sai baba.</li><li>
                            We make every effort to follow the divine path.</li><li>
                            We lend a hand in providing the service to poor and needy.</li><li>
                            We come up with innovative spiritual activities, ideas and thoughts.</li><li>
                            We train people who wish to take part in our activities.</li><li>
                            We are dedicated and we don’t entertain any sort of offerings.</li><li>
                            We pray for you and your dear ones.</li><li>
                            We make an effort to bring peace and prosperity to the entire world.</li></ul>
</div><div class="col-sm-3"></div>
                    </div> -->

                    <div class="col-sm-12">
                        <?php if($aboutus->image!="") { ?>
                        <img src="<?php echo base_url(); ?>useruploadfiles/postimages/<?php echo $inshiridi->image; ?>" alt="IN SHIRIDI"></div><br/>
                        <?php } ?>
                        <?php echo $aboutus->description; ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>