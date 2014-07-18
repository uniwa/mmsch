<script type="text/javascript">
    
    $(document).ready(function() {
        
        var tabStripElement = $("#tabstrip").data('kendoTabStrip');
        
        $("#menu").kendoPanelBar({
            
            orientation: 'vertical',
            
            select: function(e) {
                
                var section = $(e.item).data('section');
                var tabLabel = $(e.item).children(".k-link").text();
                 
                if (typeof section === 'undefined')
                    return;
                 
                if (section in $('#tabstrip ul').data('openedTabs')) {
                 
                    tabStripElement.select('#tb-' + section);
                    return;
                }
                 
                tabStripElement.append({
                    encoded: false,
                    text: tabLabel,
                    contentUrl: "client/views/grids/" + section + ".php"
                });
                 
                $('#tabstrip ul').data('openedTabs')[section] = 1;
                 
                var appendedTab = tabStripElement.tabGroup.children("li.k-last");
                appendedTab.attr('id', 'tb-' + section);

                var tabIndex1 = appendedTab.index();
                tabStripElement.select(tabIndex1);

                var closeBtn = $('<a class="close">&times;</a>');
                appendedTab.append(closeBtn);

                closeBtn.click(function() {

                    var tabIndex2 = $(this).parent().index();

                    tabStripElement.select(tabIndex2);

                    var tab = tabStripElement.select();
                    var otherTab = tab.next();
                    otherTab = otherTab.length ? otherTab : tab.prev();

                    tabStripElement.remove(tab);
                    //tabStripElement.contentHolder(tabIndex2).remove();

                    tabStripElement.select(otherTab);

                    delete $('#tabstrip ul').data('openedTabs')[section];

                });
            }
        });
        
        $("#menu li:first > span").trigger("click");
        
        $('#tabstrip').data('kendoTabStrip').remove('#tb-units');
    });
    
</script>

<ul id="menu" style="margin: 0 10px 0 10px;">

    <li data-section="categories" k-state-active>Κατηγορίες</li>
    <li data-section="unit-types">Τύποι Μονάδων</li>
    <li data-section="education-levels">Επίπεδα Εκπαίδευσης</li>

    <li class="divider"></li>
    <li data-section="region-edu-admins">Περιφέρειες</li>
    <li data-section="edu-admins">Διευθύνσεις Εκπαίδευσης</li>
    <li data-section="transfer-areas">Περιοχές Μετάθεσης</li>

    <li class="divider"></li>
    <li data-section="implementation-entities">Φορείς Υλοποίησης</li>
    <li data-section="legal-characters">Νομικοί Χαρακτήρες</li>
    <li data-section="tax-offices">Εφορίες</li>
    <li data-section="municipalities">Δήμοι ΟΤΑ</li>

    <li class="divider"></li>
    <li data-section="special-types">Ειδικοί Τύποι</li>
    <li data-section="states">Καταστάσεις</li>

    <li class="divider"></li>
    <li data-section="worker-specializations">Κατηγορίες Εργαζομένων</li>
    <li data-section="worker-positions">Θέσεις Εργαζομένων</li>
    <!-- 
    <li data-section="workers">Εργαζόμενοι</li>
     -->

</ul>