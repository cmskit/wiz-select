
(function( $ )
{
	
	$.fn.select = function()
	{
		
		// Select-Field
		if (this.data('option'))
		{
            var that = this;
            // data-attribute is automatically paresd if json structure is detected
            var o = this.data('option');
            //alert(JSON.stringify(o))
			var str = '<select class="inp" name="'+this.attr('name')+'">';
			for (var i=0,j=o.length; i<j; ++i)
			{
				var tooltip = '', val = o[i], label = o[i];
				// we can get a simple array OR a json object containing keys like label, round, square
                if(typeof(o[i])=="object") {
                    val = o[i].square ? o[i].square : o[i].label;
                    tooltip = o[i].round ? o[i].round : '';
                    label = o[i].label;
                }
                str += '<option '+((val==this.attr('value'))?'selected="selected"':'')+' title="'+tooltip+'" value="'+val+'">'+label+'</option>';

    }
			str += '</select>';

			this.after(str).remove();

		}
		
		// Range-Slider ( jQuery-UI Slider must be available! )
		if (this.attr('data-min') && this.attr('data-max'))
		{
			var sdiv = $('<div></div>'), that = this;
			this.after(sdiv).attr('readonly','readonly');
			sdiv.slider({
				range: 'min',
				value: parseInt(that.val()),
				min: parseInt(that.data('min')),
				max: parseInt(that.data('max')),
				//steps: 
				slide: function( event, ui ) {
					$('#input_' + that.attr('name') ).val( ui.value );
					hasCanged = true;
				}
			});
		}
	};
})( jQuery );
