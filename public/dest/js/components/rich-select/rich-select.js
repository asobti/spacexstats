define(["knockout","ko.mapping","jquery","text!components/rich-select/rich-select.html"],function(e,n,t,i){function o(i){function o(n){var t=this;t.id=e.observable(n.mission_id),t.name=e.observable(n.name),t.summary=e.observable(n.summary),t.image=e.computed(function(){return null!=n.featured_image?"/media/small/"+n.featured_image.filename:null}),t.isSelected=e.computed(function(){return t==s.selectedOption()})}var s=this;s.mappingOptions={key:function(e){return e.id},create:function(e){return new o(e.data)}},s.selectedOption=e.observable(),s.selectOption=function(e){s.selectedOption(e),s.dropdownVisible(!1)},s.options=e.observableArray(),s.dropdownVisible=e.observable(!1),s.toggleDropdownVisibility=function(){s.dropdownVisible(!s.dropdownVisible())},s.init=function(){t.ajax(i.fetchFrom,{type:"GET",success:function(e){var o={mission_id:0,name:"Select...",summary:""};e.unshift(o),console.log(e),n.fromJS(e,s.mappingOptions,s.options),1!=i["default"]||i.selected?i.selected&&s.selectedOption(t.grep(s.options(),function(e){return e.id()==i.selected})[0]):s.selectedOption(t.grep(s.options(),function(e){return 0==e.id()})[0])}})}()}return{viewModel:o,template:i}});