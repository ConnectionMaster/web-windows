                    <li id="left-column">
                        <div class="content">

                            <div class="block"><!-- .block -->
                                <span class="corners-top"><span></span></span>

                                <div class="info"><!-- .info -->

                                    <h3>PHP For Windows</h3>
                                    <p>
                                    This site is dedicated to supporting PHP on Microsoft Windows.
                                    It also supports ports of PHP extensions or features as well as
                                    providing special builds for the various Windows architectures.</p>
                                    <p>
                                    If you like to build your own PHP binaries, instructions can be found on the
                                    <a href="https://wiki.php.net/internals/windows/stepbystepbuild">Wiki</a>.
                                    </p>

                                </div><!-- .info -->

                                <span class="corners-bottom"><span></span></span>
                            </div><!-- .block -->

                            <div class="block"><!-- .block -->
                                <span class="corners-top"><span></span></span>

                                <div class="info"><!-- .info -->

                                    <h3>PECL For Windows</h3>
                                    <p>
                                    <a href="http://pecl.php.net">PECL extensions</a> for Windows is being worked on.
                                    Windows DLL can be downloaded right from the <a href="http://pecl.php.net">PECL website</a>.
                                    </p>

                                </div><!-- .info -->

                                <span class="corners-bottom"><span></span></span>
                            </div><!-- .block -->

<?php
if ((isset($mode) && ($mode == 'snapshots' || $mode == 'qa'))
 || strpos($_SERVER['SCRIPT_FILENAME'], 'snapshots') !== FALSE
 || strpos($_SERVER['SCRIPT_FILENAME'], 'qa') !== FALSE
 || strpos($_SERVER['SCRIPT_FILENAME'], 'download') == FALSE
 )

{
?>
                            <div class="block"><!-- .block -->
                                <span class="corners-top"><span></span></span>

                                <div class="info"><!-- .info -->

                                    <h3>Which version do I choose?</h3> <br/>

									<h4><u>IIS</u></h4>
									<p>If you are using PHP as FastCGI with IIS you should use the Non-Thread Safe (NTS) versions of PHP.</p>

									<h4><u>Apache</u></h4>
									<p>Please use the Apache HTTP Server builds provided by <a href="https://www.apachelounge.com/download/">Apache Lounge</a>.
									They provide VC16 and VS17 builds of Apache for x86 and x64.
									We use their binaries to build the Apache SAPIs.</p>

									<p>With Apache, using the apache2handler SAPI, you have to use the Thread Safe (TS) versions of PHP.</p>

									<h4><u>VS16 &amp; VS17</u></h4>
									<p>More recent versions of PHP are built with VS16 or VS17 (Visual Studio 2019 or 2022 compiler respectively) and
									include improvements in performance and stability.</p>

									<p> - The VS16 and VS17 builds require to have the <i>Visual C++ Redistributable for Visual Studio 2015-2022</i> <a href="https://aka.ms/vs/17/release/vc_redist.x64.exe">x64</a> or <a href="https://aka.ms/vs/17/release/vc_redist.x86.exe">x86</a> installed</p>

									<h4><u>TS and NTS</u></h4>
									<p><strong>TS</strong> refers to multithread capable builds. <strong>NTS</strong> refers to single thread only builds. Use case for <strong>TS</strong> binaries involves interaction with
									a multithreaded <strong>SAPI</strong> and PHP loaded as a module into a web server. For <strong>NTS</strong> binaries the widespread use case is interaction with a web server through
									the FastCGI protocol, utilizing no multithreading (but also for example CLI).</p>

									<h4><u>What is PGO?</u></h4>
									<p><a href="http://msdn.microsoft.com/en-us/library/e7k32f4k%28v=vs.110%29.aspx" target="_blank">Profile Guided Optimization</a> is an optimization
									feature available in Microsoft's Visual C++ compiler that allows you to optimize an output file based on profiling data collected during test runs of the application or module.<p>
									<p><strong>Links:</strong></p>
									<ul>
										<li><a href="http://msdn.microsoft.com/en-us/library/e7k32f4k%28v=vs.110%29.aspx" target="_blank">PGO on MSDN</a></li>
										<li><a href="https://devblogs.microsoft.com/cppblog/speed-up-windows-php-performance-using-profile-guided-optimization-pgo/" target="_blank">Visual C++ Team Blog - PGO with PHP</a></li>
										<li><a href="http://www.ksingla.net/2010/05/php-pgo-build-for-maximum-performance-on-windows/" target="_blank">PHP PGO build for maximum performance</a> (old)</li>
									</ul>

									<a name="x64"> </a>
									<h4><u>amd64 (x86_64) Builds</u></h4>
									<p><strong>PHP 7 provides full 64-bit support.</strong> The x64 builds of PHP 7 support native 64-bit integers, LFS, 64-bit memory_limit and much more.</p>
									<p>x64 builds are recommended (almost all Windows installations support x64).</p>

									<a name="long_path"></a>
									<h4><u>Long and multibyte path</u></h4>
									<p><strong>PHP 7.1+ supports long and UTF-8 paths.</strong> See the <a href="http://php.net/manual/en/migration71.windows-support.php">manual</a> for details.</p>

									<br/>
<?php
if ((isset($mode) && ($mode == 'snapshots' || $mode == 'qa'))
|| strpos($_SERVER['SCRIPT_FILENAME'], 'snapshots') !== FALSE
|| strpos($_SERVER['SCRIPT_FILENAME'], 'qa') !== FALSE)

{
?>
				    <p>QA binaries are NOT intended for production use; please use the binaries at PHP Windows <a href="/download/">downloads</a>.</p>
<?php
}
?>

                                </div><!-- .info -->

                                <span class="corners-bottom"><span></span></span>
                            </div><!-- .block -->

                            <div class="block"><!-- .block -->
                                <span class="corners-top"><span></span></span>

                                <div class="info"><!-- .info -->

                                    <h3>Archives</h3>
                                    <p>
                                    Past releases are available from our <a href="https://windows.php.net/downloads/releases/archives/">archives</a>, older versions
                                    not found there can be found at the <a href="http://museum.php.net/">Museum</a>.
                                    </p>

                                </div><!-- .info -->

                                <span class="corners-bottom"><span></span></span>
                            </div><!-- .block -->



<?php
if ((isset($mode) && $mode == 'snapshots')
|| strpos($_SERVER['SCRIPT_FILENAME'], 'snapshots') !== FALSE)

{
?>
                            <div class="block"><!-- .block -->
                                <span class="corners-top"><span></span></span>
                               <div class="info"><!-- .info -->

                                    <h3>Builds time (EST, Europe)</h3>
                                    <p>PHP 5.3 is built every hour</p>

				    <p>PHP 5.2 two times per day</p>
                                </div><!-- .info -->
                               <span class="corners-bottom"><span></span></span>
                            </div><!-- .block -->

<?php
}
?>

<?php
}
?>
                        </div> <!-- .content -->
                    </li><!-- #left-column -->
