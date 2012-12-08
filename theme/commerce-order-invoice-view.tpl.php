<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  </head>
  <body>
    <table width="100%" binvoice="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#CCC">
      <tr>
        <td>
          <table width="100%" binvoice="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFF" style="font-family: verdana, arial, helvetica; font-size: 10px;">
            <tr>
              <td>
                <table width="100%" binvoice="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tr>
                    <td nowrap="nowrap" style="line-height: 1.6em;" valign="middle">
                      <img src="http://discimport.dk/sites/discimport.dk/files/dilogo3_0.png" alt="Discimport.dk" id="logo">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" binvoice="0" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tr>
                    <th colspan="2"><?php print t('Invoice Summary'); ?></b></th>
                  </tr>
                  <tr>
                    <td colspan="2">
                      
                      <table class="details" width="100%" cellspacing="0" cellpadding="0" style="font-family: verdana, arial, helvetica; font-size: 1em;">
                        <tr>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Account No:'); ?></b> <?php print $info['invoice_uid']; ?><br/>
                            <br/>
                            <b><?php print t('Invoice No:'); ?></b> <?php print $info['invoice_number']; ?><br/>
                            <br/>
                            <b><?php print t('Order Date:'); ?></b> <?php print date('j F, Y', $info['invoice_created']); ?><br/>
                            <br/>
                            <b><?php print t('Billing Address:'); ?></b><br />
                            <?php print $info['customer_billing']; ?><br />
                          </td>
                          <td valign="top" width="50%">
                            <br/>
                            <b><?php print t('Order No:'); ?></b> <?php print $info['order_number']; ?><br/>
                            <br/>
                            <b><?php print t('Email Address:'); ?></b> <?php print $info['invoice_mail']; ?><br/>
                            <br/>
                            <b><?php print t('Shipping Address:'); ?></b><br />
                            <?php print $info['customer_shipping']; ?><br />
                          </td>
                        </tr>
                      </table>
                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="products" width="100%" binvoice="0" cellspacing="0" cellpadding="0" align="center" style="font-family: verdana, arial, helvetica; font-size: 11px;">
                  <tbody>
                    <tr>
                      <td class="line-items"><?php print $info['line_items']; ?></td>
                    </tr>
                    <tr>
                      <td><?php print $info['invoice_total'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table>
                  <tr>
                    <td colspan="2" style="background: #EEE; color: #666; padding: 1em; font-size: 0.9em; line-height: 1.6em; binvoice-top: #CCC 1px dotted; text-align: center;">
                      Discimport I/S - Fundervej 71 - Engesvang - Tlf.: 5192 4093 - E-mail: mikael@discimport.dk - CVR: 28370318 - discimport.dk<br>
                      Bank: Spar Nord - Konto: 9347-4565547955 - IBAN: DK3990044565547955 - Swift: SPNODK22
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
