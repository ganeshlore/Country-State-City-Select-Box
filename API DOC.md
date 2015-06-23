API Calling :
<pre>
Post These Attribute :
      'area'      :  (country | state | city ) [ Compulsory ]
      'country_id':  (XXX) Pass Country ID [ optional ]
      'state_id'  :  (XXX) Pass State ID [ optional ]
      
</pre>

XML Structure : if you Only Pass area = 'country'
<pre>
&lt;root&gt;
      &lt;object&gt;
             &lt;id&gt;ABW&lt;/id&gt;
             &lt;name&gt;Aruba&lt;/name&gt;
      &lt;/object&gt;
      &lt;object&gt;
             &lt;id&gt;AFG&lt;/id&gt;
             &lt;name&gt;Afghanistan&lt;/name&gt;
      &lt;/object>
      &lt;object>
             &lt;id&gt;AGO&lt;/id&gt;
             &lt;name&gt;Angola&lt;/name&gt;
      &lt;/object&gt;
      &lt;object&gt;
             &lt;id&gt;ALA&lt;/id&gt;
             &lt;name&gt;Aland Islands&lt;/name&gt;
      &lt;/object&gt;
&lt;/root&gt;
</pre>

XML Structure : if you  Pass area = 'country' & country_id = 'AGO'  // (Angola Country) you get State List
<pre>
&lt;root&gt;
      &lt;object&gt;
             &lt;id&gt;791&lt;/id&gt;
             &lt;name&gt;Luanda&lt;/name&gt;
      &lt;/object&gt;
      &lt;object&gt;
             &lt;id&gt;1475&lt;/id&gt;
             &lt;name&gt;Benguela&lt;/name&gt;
      &lt;/object&gt;
      &lt;object&gt;
             &lt;id&gt;1813&lt;/id&gt;
             &lt;name&gt;Huila&lt;/name&gt;
      &lt;/object&gt;
&lt;/root&gt;
</pre>
