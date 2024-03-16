<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        'category_id' => '5',

        'brand_id' => '1',

        'name' => 'I-phone 15 pro max',

        'price' => '132500',

        'short_description' => 'Apple iPhone 15 Pro Max comes with a maximum offer in terms of build, design, display, performance, camera and even additional features. It has one of the finest 6.7-inch Quad HD+ LTPO Super Retina XDR OLED display with a Dynamic Island Notch design on top. The frame is titanium and the body is waterproof with corning-made glasses on the front and backside.',

        'long_description' => '<h1>Apple iPhone 15 Pro Max</h1>

        <p><em>*Some prices may not be up to date according to today&rsquo;s latest price. Additional VAT may be applicable. For reference and availability, you may check out our&nbsp;<a href="https://www.mobiledokan.com/where-to-buy/">shops</a>&nbsp;page.</em></p>

        <h2>&nbsp;</h2>

        <p>Price in Bangladesh</p>

        <table>
            <tbody>
                <tr>
                    <td><strong>Official</strong></td>
                    <td><strong><strong>৳239,000</strong></strong>&nbsp;256 GB<br />
                    <strong><strong>৳279,999</strong></strong>&nbsp;512 GB<br />
                    <strong><strong>৳319,999</strong></strong>&nbsp;1 TB</td>
                </tr>
                <tr>
                    <td><strong>Unofficial</strong>*</td>
                    <td><strong>৳165,000</strong>&nbsp;256 GB Global<br />
                    *Price may vary in shops</td>
                </tr>
                <tr>
                    <td><strong>International</strong>*</td>
                    <td><strong>৳132,000</strong>&nbsp;256 GB US<br />
                    <strong>৳160,000</strong>&nbsp;256 GB SG<br />
                    <strong>৳170,000</strong>&nbsp;256 GB EU<br />
                    *Approx. release price in&nbsp;<strong>৳</strong>BDT</td>
                </tr>
            </tbody>
        </table>

        <hr />
        <p><img alt="Apple iPhone 15 Pro Max Black Titanium" src="https://www.mobiledokan.com/wp-content/uploads/2023/09/Apple-iPhone-15-Pro-Max-Black-Titanium.webp" style="height:550px; width:650px" /></p>

        <p>Black Titanium</p>

        <p><img alt="Apple iPhone 15 Pro Max Natural Titanium" src="https://www.mobiledokan.com/wp-content/uploads/2023/09/Apple-iPhone-15-Pro-Max-Natural-Titanium.webp" style="height:550px; width:650px" /></p>

        <p>Natural Titanium</p>

        <p><img alt="Apple iPhone 15 Pro Max White Titanium" src="https://www.mobiledokan.com/wp-content/uploads/2023/09/Apple-iPhone-15-Pro-Max-White-Titanium.webp" style="height:550px; width:650px" /></p>

        <p>White Titanium</p>

        <p><img alt="Apple iPhone 15 Pro Max Blue Titanium" src="https://www.mobiledokan.com/wp-content/uploads/2023/09/Apple-iPhone-15-Pro-Max-Blue-Titanium.webp" style="height:550px; width:650px" /></p>

        <p>Blue Titanium</p>

        <hr />
        <h2>Apple iPhone 15 Pro Max Full Specifications</h2>

        <table>
            <tbody>
                <tr>
                    <td><strong>Models</strong></td>
                    <td>A3106 (International); A2849 (USA); A3105 (Canada, Japan); A3108 (China, Hong Kong)</td>
                </tr>
                <tr>
                    <td><strong>First Release</strong></td>
                    <td>September 22, 2023</td>
                </tr>
                <tr>
                    <td><strong>Colors</strong></td>
                    <td>Black Titanium, Natural Titanium, White Titanium, Blue Titanium</td>
                </tr>
                <tr>
                    <th>&nbsp;Connectivity</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Network</td>
                    <td>2G, 3G, 4G, 5G</td>
                </tr>
                <tr>
                    <td>SIM</td>
                    <td>Dual SIM (Nano-SIM and eSIM)</td>
                </tr>
                <tr>
                    <td>WLAN</td>
                    <td>✅ dual-band, Wi-Fi hotspot</td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td>✅ v5.3, A2DP, LE</td>
                </tr>
                <tr>
                    <td>GPS</td>
                    <td>✅ (L1+L5), GLONASS, GALILEO, BDS, QZSS</td>
                </tr>
                <tr>
                    <td>Radio</td>
                    <td>✖</td>
                </tr>
                <tr>
                    <td>USB</td>
                    <td>✅ v3.2</td>
                </tr>
                <tr>
                    <td>OTG</td>
                    <td>✅</td>
                </tr>
                <tr>
                    <td>USB Type-C</td>
                    <td>✅, DisplayPort</td>
                </tr>
                <tr>
                    <td>NFC</td>
                    <td>✅</td>
                </tr>
                <tr>
                    <th>&nbsp;Body</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Style</td>
                    <td>Titanium &amp; Dynamic Island</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Corning-made Glass front &amp; back, grade 5 titanium frame</td>
                </tr>
                <tr>
                    <td>Water Resistance</td>
                    <td>✅ IP68 dust/water resistant (up to 6m for 30 mins)</td>
                </tr>
                <tr>
                    <td>Dimensions</td>
                    <td>159.9 x 76.7 x 8.3 millimeters</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>221 grams</td>
                </tr>
                <tr>
                    <th>&nbsp;Display</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>6.7 inches</td>
                </tr>
                <tr>
                    <td>Resolution</td>
                    <td>1290 x 2796 pixels (460 ppi)</td>
                </tr>
                <tr>
                    <td>Technology</td>
                    <td>LTPO Super Retina XDR OLED Touchscreen</td>
                </tr>
                <tr>
                    <td>Protection</td>
                    <td>✅ Ceramic Shield glass</td>
                </tr>
                <tr>
                    <td>Features</td>
                    <td>120Hz, HDR10, Dolby Vision, Always-On display, 2000 nits max. brightness</td>
                </tr>
                <tr>
                    <th>&nbsp;Back Camera</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Resolution</td>
                    <td>Quad 48+12+12 Megapixel + TOF 3D LiDAR scanner</td>
                </tr>
                <tr>
                    <td>Features</td>
                    <td>Dual Pixel PDAF, sensor-shift OIS, ultrawide, periscope telephoto, 5x optical zoom, depth &amp; more</td>
                </tr>
                <tr>
                    <td>Video Recording</td>
                    <td>4K (2160p), Dolby Vision HDR, 10-bit HDR, stereo sound rec., Cinematic mode, ProRes, 3D (spatial) video</td>
                </tr>
                <tr>
                    <th>&nbsp;Front Camera</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Resolution</td>
                    <td>Dual 12 Megapixel + SL 3D</td>
                </tr>
                <tr>
                    <td>Features</td>
                    <td>F/1.9 aperture, PDAF, HDR, OIS, 1/3.6&Prime;, depth / biometrics sensor</td>
                </tr>
                <tr>
                    <td>Video Recording</td>
                    <td>4K (2160p@60fps max.), gyro-EIS, 4K@30fps Cinematic mode, HDR</td>
                </tr>
                <tr>
                    <th>&nbsp;Battery</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Type and Capacity</td>
                    <td>Lithium-ion 4422 mAh (non-removable)</td>
                </tr>
                <tr>
                    <td>Fast Charging</td>
                    <td>✅ Wired, 50% in 30 minutes</td>
                </tr>
                <tr>
                    <td>Wireless Charging</td>
                    <td>✅ Fast Wireless Charging (15W MagSafe, 7.5W Qi magnetic)</td>
                </tr>
                <tr>
                    <th>&nbsp;Performance</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td>iOS 17</td>
                </tr>
                <tr>
                    <td>Chipset</td>
                    <td>Apple A17 Pro (3 nm)</td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>8 GB</td>
                </tr>
                <tr>
                    <td>Processor</td>
                    <td>Hexa-core, up to 3.78 GHz</td>
                </tr>
                <tr>
                    <td>GPU</td>
                    <td>Apple GPU (6-core graphics)</td>
                </tr>
                <tr>
                    <th>&nbsp;Storage</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>ROM</td>
                    <td>256 / 512 GB / 1 TB (NVMe)</td>
                </tr>
                <tr>
                    <td>External Slot</td>
                    <td>✖</td>
                </tr>
                <tr>
                    <th>&nbsp;Sound</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>3.5mm Jack</td>
                    <td>✖</td>
                </tr>
                <tr>
                    <td>Features</td>
                    <td>Loudspeaker (stereo speakers)</td>
                </tr>
                <tr>
                    <th>&nbsp;Security</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>Fingerprint</td>
                    <td>✖</td>
                </tr>
                <tr>
                    <td>Face Unlock</td>
                    <td>✅ Apple Face ID</td>
                </tr>
                <tr>
                    <th>&nbsp;Others</th>
                </tr>
                <tr>
                    <td>Sensors</td>
                    <td>Face ID, Accelerometer, Proximity, Gyroscope, E-Compass, Barometer</td>
                </tr>
                <tr>
                    <td>Other Features</td>
                    <td>&ndash; Action Button<br />
                    &ndash; Apple Pay (Visa, MasterCard, AMEX certified)<br />
                    &ndash; Siri<br />
                    &ndash; Ultra Wideband (UWB) support<br />
                    &ndash; Emergency SOS via satellite (SMS sending/receiving)</td>
                </tr>
                <tr>
                    <td>Manufactured by</td>
                    <td>Apple</td>
                </tr>
                <tr>
                    <td>Made in</td>
                    <td>Various</td>
                </tr>
                <tr>
                    <td>Sar Value</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <hr />
        <h3>Highlights</h3>

        <p><strong>Apple iPhone 15 Pro Max</strong>&nbsp;comes with a maximum offer in terms of build, design, display, performance, camera and even additional features. It has one of the finest 6.7-inch Quad HD+ LTPO Super Retina XDR OLED display with a Dynamic Island Notch design on top. The frame is titanium and the body is waterproof with corning-made glasses on the front and backside.</p>

        <p>The photography, the video recording and the gaming or overall performance are all industry-leading at the time of its release. Yes, it has the best camera for mobile photography, the best (cinematic-level) 4K video recording and next-generation, the most advanced gaming capability with Apple A17 Pro chipset. There is also an improved battery.</p>

        <p>Some attractive features of this phone are a programmable action button for a variety of shortcuts and an Emergency SOS via satellite. Features like Apple Pay, Face ID, Siri, and Ultra Wideband support are there as usual too.</p>

        <table>
            <tbody>
                <tr>
                    <td><strong>Pros</strong></td>
                    <td><strong>Cons</strong></td>
                </tr>
                <tr>
                    <td>✔ Solid build, protection, waterproof, titanium frame</td>
                    <td>✘ No 3.5mm Jack</td>
                </tr>
                <tr>
                    <td>✔ Cinematic-level front and back camera quality</td>
                    <td>✘ No MicroSD slot</td>
                </tr>
                <tr>
                    <td>✔ Top-grade display quality</td>
                    <td>✘ No fingerprint sensor</td>
                </tr>
                <tr>
                    <td>✔ Industry leading 3 nm Apple A17 Pro chipset</td>
                    <td>✘ No FM Radio</td>
                </tr>
                <tr>
                    <td>✔ Next-level gaming experience</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>✔ Improved battery and charging</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>✔ Emergency SOS via satellite</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>✔ Apple optimized hardware and software</td>
                </tr>
            </tbody>
        </table>',

        'badge' => 'new',

        'image' => '1700318989.jpg',

        'qty' => '194',]);

        Product::create([
        'category_id' => '4',

        'brand_id' => '1',

        'name' => 'Team Elite 16GB 3200MHz DDR4 Desktop RAM',

        'price' => '8500',

        'short_description' => 'The brand-new DDR4 memory module product of ELITE series launched by Team Group Inc, with its only 1.2 working voltage, saves 20% of power compared to the last generation. This desktop RAM featured with 1.2 V memory module, Massive 32 GB Kit capacity. It completely compatible with X99 chipset. Therefore, the heat generated from the product itself has also been reduced, and it can maintain the peripheral operating temperature around the system. This desktop RAM also featured with 25,600 MB/s (PC4 25600) Data Transfer Bandwidth. The product shows perfect compliance with the specifications of JEDEC, and it has 100% product compatibility as well as quality reliability with INTEL\'s latest X99 chipset. Both single-channel and dual-channel are available at the same time so as to meet the demands of users at different levels. The ELITE serial desktop RAM offers exceptional qualities including stability, long-endurance and low-power consumption with its outstanding function.',

        'long_description' => '<p>The brand-new DDR4 memory module product of ELITE series launched by Team Group Inc, with its only 1.2 working voltage, saves 20% of power compared to the last generation. This desktop RAM featured with 1.2 V memory module, Massive 32 GB Kit capacity. It completely compatible with X99 chipset. Therefore, the heat generated from the product itself has also been reduced, and it can maintain the peripheral operating temperature around the system. This desktop RAM also featured with 25,600 MB/s (PC4 25600) Data Transfer Bandwidth. The product shows perfect compliance with the specifications of JEDEC, and it has 100% product compatibility as well as quality reliability with INTEL&#39;s latest X99 chipset. Both single-channel and dual-channel are available at the same time so as to meet the demands of users at different levels. The ELITE serial desktop RAM offers exceptional qualities including stability, long-endurance and low-power consumption with its outstanding function.</p>',

        'image' => '1700912333.jpg',

        'qty' => '168',]);
        
        Product::create([
        'category_id' => '3',

        'brand_id' => '1',

        'name' => 'Biwintech NX500 128GB M.2 2280 PCIe NVMe SSD',

        'price' => '1890',

        'short_description' => 'adfadfad',

        'long_description' => '<p>adsfasdfasdf#@</p>',

        'image' => '1700381780.webp',

        'qty' => '453',]);
        
        Product::create([
        'category_id' => '6',

        'brand_id' => '1',

        'name' => 'LG 22MK600M-B 21.5 inch IPS Full HD LED Monitor',

        'price' => '14500',

        'short_description' => 'LG 22MK600M-B high definition monitor with IPS technology liquid crystal display provides the true color of the images. Improved full HD resolution with 5ms response time ensures a comfortable viewing experience. With the Radeon FreeSync option, gamers can experience seamless fast-paced games. Its reader mode reduces blue light to help lessen eye fatigue.

        Have the best deals at Star Tech with an EMI purchase facility, order online to have the delivery all over Bangladesh.',

        'long_description' => '<table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="3">Display Features</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Display Size</td>
                    <td>21.5 inch</td>
                </tr>
                <tr>
                    <td>Panel Type</td>
                    <td>IPS</td>
                </tr>
                <tr>
                    <td>Resolution</td>
                    <td>FHD (1920 x 1080)</td>
                </tr>
                <tr>
                    <td>Pixel pitch(MM)</td>
                    <td>0.3114 mm x 0.3114 mm</td>
                </tr>
                <tr>
                    <td>Aspect Ratio</td>
                    <td>16:9<br />
                    &nbsp;</td>
                </tr>
                <tr>
                    <td>Viewing Angle</td>
                    <td>178/178<br />
                    &nbsp;</td>
                </tr>
                <tr>
                    <td>Brightness</td>
                    <td>250cd/m2(Typ.) 200cd/m2(Min.)<br />
                    &nbsp;</td>
                </tr>
                <tr>
                    <td>Contrast Ratio</td>
                    <td>1000:1(Typ.)<br />
                    &nbsp;</td>
                </tr>
                <tr>
                    <td>Refresh Rate</td>
                    <td>75Hz</td>
                </tr>
                <tr>
                    <td>Color Support</td>
                    <td>16.7M colors<br />
                    &nbsp;</td>
                </tr>
                <tr>
                    <td>Color Gamut</td>
                    <td>NTSC 72%</td>
                </tr>
                <tr>
                    <td>Response Time</td>
                    <td>5ms(Faster)<br />
                    &nbsp;</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Video Features</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Flicker Free</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Free Sync Support</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Others</td>
                    <td>Smart Energy Saving: Yes<br />
                    DDC/CI: Yes<br />
                    Picture Mode: Custom, Reader, Color Weakness, Photo, Cinema, Game<br />
                    Plug &amp; Play: Yes<br />
                    Super+ Resolution: Yes<br />
                    Automatic Standby: Yes<br />
                    Black Stabilizer: Yes<br />
                    Black Level: Yes<br />
                    DAS Mode: Yes<br />
                    Response Time Control: Yes<br />
                    On Screen Control: Yes (2.0)<br />
                    Color Calibrated: Yes<br />
                    Ratio: Wide/Original<br />
                    1ms Motion Blur Reduction: Yes<br />
                    Crosshair: Yes<br />
                    Adaptive Sync: Radeon FreeSync&trade;<br />
                    DFC: Yes<br />
                    OSD Lock: Yes<br />
                    Auto Adjustment(D-sub Only): Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Audio Features</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Speaker (Built In)</td>
                    <td>No</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Connectivity</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HDMI</td>
                    <td>HDMI x2</td>
                </tr>
                <tr>
                    <td>Audio Jack</td>
                    <td>Headphone Out Yes</td>
                </tr>
                <tr>
                    <td>D-Sub</td>
                    <td>Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Mechanical Design</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tilt</td>
                    <td>Yes (-2~15)</td>
                </tr>
                <tr>
                    <td>Security Locker</td>
                    <td>OSD</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Physical Specification</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Color</td>
                    <td>Black</td>
                </tr>
                <tr>
                    <td>Dimension</td>
                    <td>Without Stand (WxHxD) 19.2&quot; x 11.5&quot; x 2.6&quot;<br />
                    Shipping Dimensions (WxHxD)</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>Shipping Weight 8.2 lbs<br />
                    With Stand (WxHxD) 19.2&quot; x 15.2&quot; x 7.2&quot;<br />
                    With Stand Weight 5.95 lbs<br />
                    Without Stand Weight 5.1 lbs</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Power</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Type</td>
                    <td>Adapter</td>
                </tr>
                <tr>
                    <td>Voltage</td>
                    <td>100~240V (50/60Hz)</td>
                </tr>
                <tr>
                    <td>Others</td>
                    <td>DC Off 0.3W<br />
                    Power Save/Sleep Mode (Max.)<br />
                    Normal On (factory out condition Typ.): 25.5W</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Warranty Information</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Warranty</td>
                    <td>03 years</td>
                </tr>
            </tbody>
        </table>

        <h2>Description</h2>

        <h2>LG 22MK600M-B 21.5 inch IPS Full HD LED Monitor</h2>

        <p>LG 22MK600M-B high definition monitor with IPS technology liquid crystal display provides the true color of the images. Improved full HD resolution with&nbsp;5ms response time ensures a comfortable viewing experience. With the Radeon FreeSync option, gamers can experience seamless fast-paced games. Its reader mode reduces blue light to help lessen eye fatigue.</p>

        <p>Have the best deals at Star Tech with an EMI purchase facility, order online to have the delivery all over Bangladesh.</p>',

        'image' => '1700382478.jpg',

        'qty' => '80',]);

        Product::create([
        'category_id' => '2',

        'brand_id' => '1',

        'name' => 'MSI Titan GT77HX 13VI Core i9 13th Gen 64GB RAM 4TB SSD RTX 4090 16GB Graphics 17.3" 4K UHD 144Hz Gaming Laptop',

        'price' => '774900',

        'short_description' => 'The MSI Titan GT77HX 13VI is a powerful gaming laptop that boasts top-of-the-line specifications for an unparalleled gaming experience. Equipped with an Intel Core i9-13980HX (36M Cache, 2.2 GHz up to 5.60 GHz), 64GB of RAM, and a massive 4TB SSD, this laptop delivers lightning-fast performance for even the most demanding games. The 17.3" 4K UHD 144Hz display provides stunning visuals and smooth gameplay, while the RTX 4090 16GB graphics card ensures that you can run the latest games at maximum settings. The laptop also features a sleek design with a backlit keyboard, making it perfect for gaming on the go. This MSI Laptop is an excellent choice for gamers who demand the best in performance and graphics.',

        'long_description' => '<h2>Specification</h2>

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="3">Processor</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Processor Brand</td>
                    <td>Intel</td>
                </tr>
                <tr>
                    <td>Processor Model</td>
                    <td>Core i9-13980HX</td>
                </tr>
                <tr>
                    <td>Generation</td>
                    <td>13th Gen</td>
                </tr>
                <tr>
                    <td>Processor Frequency</td>
                    <td>2.2 GHz up to 5.60 GHz</td>
                </tr>
                <tr>
                    <td>Processor Core</td>
                    <td>24 (Performance-cores: 8, Efficient-cores: 16)</td>
                </tr>
                <tr>
                    <td>Processor Thread</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>CPU Cache</td>
                    <td>36MB</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Chipset</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chipset Model</td>
                    <td>Intel HM770</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Display</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Display Size</td>
                    <td>17.3 inch</td>
                </tr>
                <tr>
                    <td>Display Type</td>
                    <td>IPS</td>
                </tr>
                <tr>
                    <td>Display Resolution</td>
                    <td>UHD (3840x2160)</td>
                </tr>
                <tr>
                    <td>Touch Screen</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Refresh Rate</td>
                    <td>144Hz</td>
                </tr>
                <tr>
                    <td>Display Features</td>
                    <td>MiniLED, HDR 1000</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Memory</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>RAM</td>
                    <td>64GB (32GBx2)</td>
                </tr>
                <tr>
                    <td>RAM Type</td>
                    <td>DDR5</td>
                </tr>
                <tr>
                    <td>Removable</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Total RAM Slot</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Max RAM Capacity</td>
                    <td>Max 128GB</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Storage</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Storage Type</td>
                    <td>NVMe PCIe Gen4x4 SSD</td>
                </tr>
                <tr>
                    <td>Storage Capacity</td>
                    <td>4TB (2TBx2)</td>
                </tr>
                <tr>
                    <td>Extra M.2 Slot</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Supported SSD Type</td>
                    <td>NVMe PCIe Gen5</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Graphics</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Graphics Model</td>
                    <td>NVIDIA GeForce RTX 4090</td>
                </tr>
                <tr>
                    <td>Graphics Memory</td>
                    <td>16GB</td>
                </tr>
                <tr>
                    <td>Graphics Type</td>
                    <td>GDDR6</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Keyboard &amp; TouchPad</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Keyboard Type</td>
                    <td>Backlit Keyboard</td>
                </tr>
                <tr>
                    <td>Keyboard Features</td>
                    <td>Cherry Mechanical Per-Key RGB Gaming Keyboard by SteelSeries</td>
                </tr>
                <tr>
                    <td>TouchPad</td>
                    <td>Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Camera &amp; Audio</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>WebCam</td>
                    <td>IR HD type (30fps@720p)</td>
                </tr>
                <tr>
                    <td>Speaker</td>
                    <td>2x 2W Speaker<br />
                    2x 2W Woofer</td>
                </tr>
                <tr>
                    <td>Microphone</td>
                    <td>Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Ports &amp; Slots</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Optical Drive</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Card Reader</td>
                    <td>1x SD Express Card Reader</td>
                </tr>
                <tr>
                    <td>Mini DP Port</td>
                    <td>1x Mini-DisplayPort</td>
                </tr>
                <tr>
                    <td>HDMI Port</td>
                    <td>1x (8K @ 60Hz / 4K @ 120Hz) HDMI</td>
                </tr>
                <tr>
                    <td>USB 3 Port</td>
                    <td>3x Type-A USB3.2 Gen2</td>
                </tr>
                <tr>
                    <td>USB Type-C / Thunderbolt Port</td>
                    <td>1x Type-C (USB / DP / Thunderbolt 4) with PD charging<br />
                    1x Type-C (USB / DP / Thunderbolt 4)</td>
                </tr>
                <tr>
                    <td>Headphone &amp; Microphone Port</td>
                    <td>1x Mic-in/Headphone-out Combo Jack</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Network &amp; Connectivity</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>LAN</td>
                    <td>Killer Gb LAN (Up to 2.5G)</td>
                </tr>
                <tr>
                    <td>WiFi</td>
                    <td>Killer ax Wi-Fi 6E</td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td>Bluetooth v5.3</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Security</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fingerprint Sensor</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Camera Privacy Shutter</td>
                    <td>Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Software</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Operating System</td>
                    <td>Windows 11 Pro High-End Standard Version</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Power</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Battery Type</td>
                    <td>4 cell</td>
                </tr>
                <tr>
                    <td>Battery Capacity</td>
                    <td>99 Whr</td>
                </tr>
                <tr>
                    <td>Adapter Type</td>
                    <td>330W adapter</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Physical Specification</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Color</td>
                    <td>Core Black</td>
                </tr>
                <tr>
                    <td>Dimensions</td>
                    <td>397 x 330 x 23 mm</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>3.3 kg</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Warranty</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Warranty Details</td>
                    <td>02 years International Warranty</td>
                </tr>
            </tbody>
        </table>

        <h2>Description</h2>

        <h2>MSI Titan GT77HX 13VI Core i9 13th Gen 64GB RAM 4TB SSD RTX 4090 16GB Graphics 17.3&quot; UHD 144Hz Gaming Laptop</h2>

        <p>The MSI Titan GT77HX 13VI is a powerful gaming laptop that boasts top-of-the-line specifications for an unparalleled gaming experience. Equipped with an Intel Core i9-13980HX (36M Cache, 2.2 GHz up to 5.60 GHz), 64GB of RAM, and a massive 4TB SSD, this laptop delivers lightning-fast performance for even the most demanding games. The 17.3&quot; 4K UHD 144Hz display provides stunning visuals and smooth gameplay, while the RTX 4090 16GB graphics card ensures that you can run the latest games at maximum settings. The laptop also features a sleek design with a backlit keyboard, making it perfect for gaming on the go. This&nbsp;<a href="https://www.startech.com.bd/laptop-notebook/laptop/msi-laptop" target="">MSI Laptop</a>&nbsp;is an excellent choice for gamers who demand the best in performance and graphics.</p>

        <h3>Powered by NVIDIA GeForce RTX 4090 Laptop GPU</h3>

        <p>The MSI Titan GT77HX 13VI is powered by the latest NVIDIA GeForce RTX 4090 16GB GDDR6 Graphics, which is the most powerful graphics card available for laptops. This GPU is built on the ultra-efficient NVIDIA Ada Lovelace architecture and delivers a quantum leap in performance with AI-powered DLSS 3 and full ray tracing capabilities. The RTX 4090 16GB graphics card allows you to experience lifelike virtual worlds, and run the latest games at maximum settings. The GPU is also equipped with the Max-Q suite of technologies that optimizes system performance, power, battery life, and acoustics for peak efficiency, making sure the machine runs at its best while gaming or doing creative work. The MSI Titan GT77HX 13VI is the perfect&nbsp;<a href="https://www.startech.com.bd/laptop-notebook/Gaming-Laptop" target="">Gaming Laptop</a>&nbsp;for gamers and creators who demand the best in graphics performance.</p>

        <h3>Mini LED 4K 144Hz Display</h3>

        <p>The MSI Titan GT77HX 13VI offers an immersive gaming experience with its ultra-high resolution Mini LED 4K display, which delivers exceptional realism and detail. The AmLED ACR technology ensures that colors remain vibrant and clear even in bright environments, while the DisplayHDR 1000 certification provides a wider color gamut. Additionally, the 144Hz refresh rate ensures fast and smooth gameplay. Upgrade your gaming experience and become a Titan with the MSI Titan GT77HX.</p>

        <h3>More Storage. More Memory. More Expansion</h3>

        <p>The MSI Titan GT77HX 13VI Core i9 13th Gen Gaming Laptop is designed for maximum performance and storage, featuring 4 expansion memory slots for DDR5 memory, allowing you to upgrade to a massive 128GB of RAM. This&nbsp;<a href="https://www.startech.com.bd/core-i9-laptop" target="">Core i9 laptop</a>&nbsp;has 3 M.2 SSD slots, including 1 PCIe Gen5 and 2 PCIe Gen4, providing high-speed storage and ample space for all your gaming and media needs. Despite its powerful hardware, the GT77HX is incredibly thin and lightweight, making it easy to take on-the-go. With its efficient design, the Titan GT77 HX is the perfect choice for gamers who demand the best in performance and portability.</p>

        <h3>Cherry MX Ultra Low Profile Mechanical Keyboard</h3>

        <p>MSI Titan GT77HX 13VI features&nbsp;Cherry Mechanical Per-Key RGB Gaming Keyboard by SteelSeries. The keyboard features a two-piece keycap structure and gold cross-point contact system to ensure the most crispy tactile and precise actuation in any session. The slim, sleek design of the keyboard adds to the overall aesthetics of the laptop. The keyboard is built to last, ensuring an exceptional typing experience for years to come.</p>

        <h3>Desktop-level IO Port</h3>

        <p>The MSI Titan GT77HX 13VI is designed to offer a wide range of connectivity options for all your gaming and work needs. It comes equipped with multiple ports for a variety of devices. It is equipped with 1x Type-C (USB / DP / Thunderbolt 4) with PD charging, 1x Type-C (USB / DP / Thunderbolt 4), 3x Type-A USB3.2 Gen2, 1x SD Express Card Reader, 1x (8K @ 60Hz / 4K @ 120Hz) HDMI, 1x Mini-DisplayPort and 1x RJ45.</p>

        <h2>Buy MSI Titan GT77HX 13VI Core i9 13th Gen Gaming Laptop from the best Laptop Shop in BD</h2>

        <p>In Bangladesh, you can get original&nbsp;<a href="https://www.startech.com.bd/msi-titan-gt77hx-13vi-core-i9-13th-gen-gaming-laptop" target="">MSI Titan GT77HX 13VI Core i9 13th Gen Gaming Laptop</a>&nbsp;From Star Tech. We have a large collection of latest&nbsp;<a href="https://www.startech.com.bd/laptop-notebook/Gaming-Laptop/msi" target="">MSI Gaming Laptop</a>&nbsp;to purchase. Order Online Or Visit your Nearest&nbsp;<a href="https://www.startech.com.bd/" target="">Star Tech</a>&nbsp;Shop to get yours at lowest price. The MSI Titan GT77HX 13VI Gaming Laptop comes with 2 Years warranty.</p>',

        'badge' => 'hot',

        'image' => '1700389252.webp',

        'qty' => '40',]);

        Product::create([
        'category_id' => '1',

        'brand_id' => '1',

        'name' => 'Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard',

        'price' => '19800',

        'short_description' => 'Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard
        The Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard is a high-quality, customized keyboard that is ideal for typing and gaming. The key caps of the keyboard are constructed of OSA PBT material, which has been double shot to generate transparent and opaque layers for contrast and durability. The hot-swappable nature of the keyboard enables for simple switch replacement without soldering or desoldering. Keychron Q3 Hot-Swappable QMK Custom Mechanical Keyboard works with most 3- and 5-pin switches and allows for QMK firmware customisation. The wired mode employs a detachable and reversible Type-C interface that permits QMK firmware customisation. The keyboard\'s CNC aluminum body is durable and lightweight, with a sleek and elegant design. The keyboard offers smooth and flexible performance, stunning backlight effects, a comfortable and customizable layout, and a sturdy and lightweight body. The Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard is a premium and customizable keyboard that offers a smooth and flexible typing and gaming experience.',

        'long_description' => '<h2>Specification</h2>

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="3">Main Features</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Type</td>
                    <td>Mechanical</td>
                </tr>
                <tr>
                    <td>Wired/Wireless</td>
                    <td>Wired/Wireless</td>
                </tr>
                <tr>
                    <td>Switch Color</td>
                    <td>Brown Switch</td>
                </tr>
                <tr>
                    <td>Interface</td>
                    <td>USB Type-C</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Physical Attribute</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Color</td>
                    <td>Silver Gray</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Keycap Material: Double Shot PBT<br />
                    Frame: Aluminum Frame</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Warranty Information</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Warranty</td>
                    <td>1 year replacement warranty (Must be Claimed with Original Box &amp; All accessories)</td>
                </tr>
            </tbody>
        </table>

        <h2>Description</h2>

        <h2>Keychron Q3 Hot-Swappable Red&nbsp;Switch Knob QMK Custom Mechanical Keyboard</h2>

        <p>The Keychron&nbsp;Q3&nbsp;Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard is a high-quality, customized keyboard that is ideal for typing and gaming. The key caps of the keyboard are constructed of OSA PBT material, which has been double shot to generate transparent and opaque layers for contrast and durability. The hot-swappable nature of the keyboard enables for simple switch replacement without soldering or desoldering. Keychron Q3 Hot-Swappable QMK Custom Mechanical Keyboard works with most 3- and 5-pin switches and allows for QMK firmware customisation. The wired mode employs a detachable and reversible Type-C interface that permits QMK firmware customisation. The keyboard&#39;s CNC aluminum body is durable and lightweight, with a sleek and elegant design. The keyboard offers smooth and flexible performance, stunning backlight effects, a comfortable and customizable layout, and a sturdy and lightweight body. The Keychron Q3 Hot-Swappable&nbsp;Red&nbsp;Switch Knob QMK Custom Mechanical Keyboard is a premium and customizable keyboard that offers a smooth and flexible typing and gaming experience.</p>

        <h3>Enhance Your Programming</h3>

        <p>The Keychron Q3 will assist you in developing your programming skills. This keyboard is particularly intended for programmers and offers the perfect balance between usefulness and comfort. The haptic feedback of the mechanical switches improves typing speed and accuracy, while the programmable keys let you to build unique shortcuts and macros. Enhance the efficiency and productivity of your coding.</p>

        <h3>Customize Your Experience</h3>

        <p>The Keychron Q3&#39;s customization features let you create a unique keyboard experience. The ideal atmosphere for your gaming or work setup may be created by selecting from a variety of colorful illumination effects and colors. You can further increase your productivity and personalize the keyboard by changing key mappings and macros, which increases efficiency.</p>

        <h3>Elevate Your Gaming</h3>

        <p>The Keychron Q3 will improve your gaming experience. Its keyboard&#39;s top-notch mechanical switches enable it to provide unrivaled precision and blazing-fast response. You have a competitive advantage during intense gaming sessions because to the extraordinary precision with which each keystroke is registered. You will have total control over outperforming your competitors thanks to its efficient layout and customized key mappings.</p>

        <h2>Buy Keychron Q3 Hot-Swappable Red&nbsp;Switch Knob QMK Custom Mechanical Keyboard from Star Tech</h2>

        <p>In Bangladesh, you can get original&nbsp;Keychron Q3 Hot-Swappable&nbsp;Red&nbsp;Switch Knob QMK Custom Mechanical Keyboard&nbsp;From Star Tech. We have a large collection of latest&nbsp;<a href="https://www.startech.com.bd/keychron-keyboard" target="">Keychron Keyboard</a>&nbsp;to purchase. Order Online Or Visit your Nearest&nbsp;<a href="https://www.startech.com.bd/" target="">Star Tech</a>&nbsp;Shop to get yours at lowest price. The Keychron Q3 Hot-Swappable Red&nbsp;Switch Knob QMK Custom Mechanical Keyboard comes with 1 year replacement warranty (Must be Claimed with Original Box &amp; All accessories).</p>

        <h2>What is the price of Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard in Bangladesh?</h2>

        <p>The latest price of Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard in Bangladesh is 19,800৳. You can buy the Keychron Q3 Hot-Swappable Red Switch Knob QMK Custom Mechanical Keyboard at best price from our website or visit any of our showrooms.</p>',

        'badge' => 'top',

        'image' => '1700912950.webp',

        'qty' => '254',]);

        Product::create([
        'category_id' => '2',

        'brand_id' => '1',

        'name' => 'Lenovo IdeaPad D330 10IGL Intel CDC N4020 10.1" HD Touch Laptop',

        'price' => '35800',

        'short_description' => 'Description
        Lenovo IdeaPad D330 10IGL Intel CDC N4020 10.1" HD Touch Laptop
        The Ideapad D330 has computing power and all the fun and mobility of a lightweight tablet. From multitasking to connecting with friends online and streaming shows. This Ideapad D330 featured 4GB DDR4 RAM, 128GB eMMC and Intel UHD 600 Graphics, and Windows 10 Home. The Lenovo Ideapad D330 comes with 10.1" (1280 x 800) HD IPS WXGA LED Antiscratch Brightness: 300nits, Aspect Ratio: 16:10, Color Gamut: 50% NTSC Display. This Lenovo IdeaPad D330 has an abundance of ports, including a USB-C 3.1 to help you charge other devices or transfer data at speeds up to 10 Gbps. Its display can generate lifelike clarity with 2S stereo Speakers Dolby Premium Audio is the perfect combination for entertainment. This Lenovo IdeaPad D330 10IGL comes with 1 year Limited Warranty (1 year for Battery and Adapter, Terms & Conditions Apply As Per Lenovo)',

        'long_description' => '<h2>Specification</h2>

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="3">Processor</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Processor Brand</td>
                    <td>Intel</td>
                </tr>
                <tr>
                    <td>Processor Model</td>
                    <td>Celeron N4020</td>
                </tr>
                <tr>
                    <td>Processor Frequency</td>
                    <td>1.10 GHz up to 2.80 GHz</td>
                </tr>
                <tr>
                    <td>Processor Core</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Processor Thread</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>CPU Cache</td>
                    <td>4 MB</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Display</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Display Size</td>
                    <td>10.1 Inch</td>
                </tr>
                <tr>
                    <td>Display Type</td>
                    <td>HD IPS LED Display</td>
                </tr>
                <tr>
                    <td>Display Resolution</td>
                    <td>1280x800 (WxH) WXGA</td>
                </tr>
                <tr>
                    <td>Touch Screen</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Display Features</td>
                    <td>Antiscratch Brightness: 300nits, Aspect Ratio: 16:10, Color Gamut: 50% NTSC Display</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Memory</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>RAM</td>
                    <td>4GB</td>
                </tr>
                <tr>
                    <td>RAM Type</td>
                    <td>DDR4</td>
                </tr>
                <tr>
                    <td>Removable</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Bus Speed</td>
                    <td>2133MHz</td>
                </tr>
                <tr>
                    <td>Total RAM Slot</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Max RAM Capacity</td>
                    <td>4GB</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Storage</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Storage Type</td>
                    <td>eMMC 5.1 SSD</td>
                </tr>
                <tr>
                    <td>Storage Capacity</td>
                    <td>128GB</td>
                </tr>
                <tr>
                    <td>Extra M.2 Slot</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>Storage Upgrade</td>
                    <td>Installed SSD Can Not Be Replaced</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Graphics</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Graphics Model</td>
                    <td>Intel UHD 600 Graphics</td>
                </tr>
                <tr>
                    <td>Graphics Memory</td>
                    <td>Shared</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Keyboard &amp; TouchPad</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Keyboard Type</td>
                    <td>Standard Keyboard</td>
                </tr>
                <tr>
                    <td>TouchPad</td>
                    <td>Yes</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Camera &amp; Audio</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>WebCam</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Speaker</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Microphone</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Audio Features</td>
                    <td>High Definition (HD) Audio, Stereo speakers, 1W x 2, Dolby Audio Premium</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Ports &amp; Slots</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Optical Drive</td>
                    <td>N/A</td>
                </tr>
                <tr>
                    <td>USB 2 Port</td>
                    <td>2 x USB 2.0 Type-A</td>
                </tr>
                <tr>
                    <td>USB Type-C / Thunderbolt Port</td>
                    <td>1 x USB 3.2 Gen 1 Type-C</td>
                </tr>
                <tr>
                    <td>Headphone &amp; Microphone Port</td>
                    <td>1 x Headphone/ Microphone Combo</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Network &amp; Connectivity</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>LAN</td>
                    <td>Gigabit Lan</td>
                </tr>
                <tr>
                    <td>WiFi</td>
                    <td>802.11ac 1x1</td>
                </tr>
                <tr>
                    <td>Bluetooth</td>
                    <td>Bluetooth 4.2</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Security</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fingerprint Sensor</td>
                    <td>No</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Software</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Operating System</td>
                    <td>Genuine Win 10 home</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Power</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Battery Type</td>
                    <td>Li-Polymer</td>
                </tr>
                <tr>
                    <td>Battery Capacity</td>
                    <td>39Wh</td>
                </tr>
                <tr>
                    <td>Adapter Type</td>
                    <td>45W AC adapter</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Physical Specification</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Color</td>
                    <td>Mineral Gray</td>
                </tr>
                <tr>
                    <td>Dimensions</td>
                    <td>249 x 178 x 9.5mm (Pad),<br />
                    249 x 186 x 8.5 mm (Keyboard Dock)</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>1.13 Kg</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">Warranty</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Warranty Details</td>
                    <td>1 year Limited Warranty (1 year for Battery and Adapter, Terms &amp; conditions Apply As Per Lenovo)</td>
                </tr>
            </tbody>
        </table>

        <h2>Description</h2>

        <h2>Lenovo IdeaPad D330 10IGL Intel CDC N4020 10.1&quot; HD Touch Laptop</h2>

        <p>The Ideapad D330 has computing power and all the fun and mobility of a lightweight tablet. From multitasking to connecting with friends online and streaming shows. This Ideapad D330 featured 4GB DDR4 RAM, 128GB eMMC and Intel UHD 600 Graphics, and Windows 10 Home. The Lenovo Ideapad D330 comes with 10.1&quot; (1280 x 800) HD IPS WXGA LED Antiscratch Brightness: 300nits, Aspect Ratio: 16:10, Color Gamut: 50% NTSC Display. This Lenovo IdeaPad D330 has an abundance of ports, including a USB-C 3.1 to help you charge other devices or transfer data at speeds up to 10 Gbps. Its display can generate lifelike clarity with 2S stereo Speakers Dolby Premium Audio is the perfect combination for entertainment. This Lenovo IdeaPad D330 10IGL comes with 1 year Limited Warranty (1 year for Battery and Adapter, Terms &amp; Conditions Apply As Per Lenovo)</p>

        <h2>What is the price of Lenovo IdeaPad D330 10IGL Intel CDC 10.1&quot; HD Touch Laptop in Bangladesh?</h2>

        <p>The latest price of Lenovo IdeaPad D330 10IGL Intel CDC 10.1&quot; HD Touch Laptop in Bangladesh is 35,800৳. You can buy the Lenovo IdeaPad D330 10IGL Intel CDC 10.1&quot; HD Touch Laptop at best price from our website or visit any of our showrooms.</p>',

        'badge' => 'new',

        'image' => '1700913357.jpg',

        'qty' => '144',]);
    }
}
