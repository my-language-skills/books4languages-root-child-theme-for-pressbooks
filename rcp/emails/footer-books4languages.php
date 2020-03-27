<?php
/**
 * Email Footer for the Books4Languages Template
 *
 * For modifying this template, please see: http://docs.restrictcontentpro.com/article/1738-template-files
 * https://docs.restrictcontentpro.com/article/1760-rcp-email-templates
 *
 * @package     Restrict Content Pro
 * @subpackage  Templates/Emails/Footer
 * @copyright   Copyright (c) 2017, Restrict Content Pro
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.2.3
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline.
$template_footer = "
	border-top:0;
	-webkit-border-radius:3px;
";

$credit = "
	border:0;
	color: #000000;
	font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	font-size:12px;
	line-height:125%;
	text-align:center;
";
?>
															</div>
														</td>
                                                    </tr>
                                                </table>
                                                <!-- End Content -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Body -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Footer -->
                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer" style="<?php echo $template_footer; ?>">
                                        <tr>
                                            <td valign="top">
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="credit" style="<?php echo $credit; ?>">
                                                        </td>
																												<td>
																													You received this email because you are a registered member of and <a href="https://books4languages.com/" target="_blank" rel="noopener" >www.books4languages</a> is providing this email as service to . <a href="https://open.books4languages.com/help/" target="_blank" rel="noopener">Unsubscribe</a>.
																											    </Br>
																													</Br>
																												  Your privacy is important to us: if you believe this email is sent to you in an error, please email us at <a href="mailto:privacy@books4languages.com" target="_blank" rel="noopener">privacy@books4languages.com</a>.
																										    	</Br>
																													</Br>
																											    Need help with anything? Hit up <a href="https://books4languages.com/contact/" target="_blank" rel="noopener" >support</a>.
																											    </Br>
																													</Br>
																											   ©Books4Languages Valencia, Spain, cp: 46550. <a href="https://books4languages.com/legal/privacy-policy/" target="_blank" rel="noopener" > Privacy Policy </a>
																											</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Footer -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
