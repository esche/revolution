/**
 * @class MODx.panel.Static
 * @extends MODx.FormPanel
 * @param {Object} config An object of config properties
 * @xtype modx-panel-static
 */
MODx.panel.Static = function(config) {
    config = config || {record:{}};
    config.record = config.record || {};
    
    var it = [];
    it.push({
        title: _('createedit_static')
        ,id: 'modx-resource-settings'
        ,cls: 'modx-resource-tab'
        ,layout: 'form'
        ,labelWidth: 200
        ,bodyStyle: 'padding: 15px 15px 15px 0;'
        ,autoHeight: true
        ,defaults: {
            border: false
            ,msgTarget: 'side'
            ,width: 400
        }
        ,items: [{
            xtype: 'hidden'
            ,name: 'id'
            ,value: config.resource || config.record.id
            ,id: 'modx-resource-id'
            ,anchor: '97%'
        },{
            layout:'column'
            ,border: false
            ,anchor: '97%'
            ,items:[{
                columnWidth: .70
                ,layout: 'form'
                ,border: false
                ,items: [{
                    xtype: 'modx-combo-template'
                    ,fieldLabel: _('resource_template')
                    ,description: _('resource_template_help')
                    ,name: 'template'
                    ,id: 'modx-resource-template'
                    ,anchor: '97%'
                    ,editable: false
                    ,baseParams: {
                        action: 'getList'
                        ,combo: '1'
                    }
                    ,listeners: {
                        'select': {fn: this.templateWarning,scope: this}
                    }
                    ,value: config.record.template || MODx.config.default_template
                }]
            },{
                columnWidth: .30
                ,layout: 'form'
                ,hideLabels: true
                ,labelWidth: 0
                ,border: false
                ,items: [{
                    xtype: 'checkbox'
                    ,boxLabel: _('resource_published')
                    ,description: _('resource_published_help')
                    ,name: 'published'
                    ,id: 'modx-resource-published'
                    ,inputValue: 1
                    ,checked: config.record.published
                    
                }]
            }]
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_pagetitle')
            ,description: _('resource_pagetitle_help')
            ,name: 'pagetitle'
            ,id: 'modx-resource-pagetitle'
            ,maxLength: 255
            ,anchor: '90%'
            ,allowBlank: false
            ,value: config.record.pagetitle
            
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_longtitle')
            ,description: _('resource_longtitle_help')
            ,name: 'longtitle'
            ,id: 'modx-resource-longtitle'
            ,maxLength: 255
            ,anchor: '90%'
            ,value: config.record.longtitle || ''
            
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_description')
            ,description: _('resource_description_help')
            ,name: 'description'
            ,id: 'modx-resource-description'
            ,maxLength: 255
            ,anchor: '90%'
            ,value: config.record.description || ''
            
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_alias')
            ,description: _('resource_alias_help')
            ,name: 'alias'
            ,id: 'modx-resource-alias'
            ,maxLength: 100
            ,anchor: '90%'
            ,value: config.record.alias || ''
            
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_link_attributes')
            ,description: _('resource_link_attributes_help')
            ,name: 'link_attributes'
            ,maxLength: 255
            ,anchor: '90%'
            ,value: config.record.link_attributes || ''
            
        },{
            xtype: 'modx-combo-browser'
            ,browserEl: 'modx-browser'
            ,prependPath: false
            ,prependUrl: false
            ,hideFiles: true
            ,fieldLabel: _('static_resource')
            ,name: 'content'
            ,id: 'modx-resource-content'
            ,maxLength: 255
            ,anchor: '95%'
            ,value: (config.record.content || config.record.ta) || ''
            ,listeners: {
                'select':{fn:function(data) {
                    var str = data.url;
                    str = str.replace(MODx.config.base_url,'');
                    if (str.substring(0,1) == '/') str = str.substring(1);
                    Ext.getCmp('modx-resource-content').setValue(str);
                    this.markDirty();
                },scope:this}
            }
            
        },{
            xtype: 'textarea'
            ,fieldLabel: _('resource_summary')
            ,description: _('resource_summary_help')
            ,name: 'introtext'
            ,id: 'modx-resource-introtext'
            ,anchor: '90%'
            ,grow: true
            ,value: config.record.introtext || ''
            
        },{
            xtype: 'modx-field-parent-change'
            ,fieldLabel: _('resource_parent')
            ,description: _('resource_parent_help')
            ,name: 'parent-cmb'
            ,editable: false
            ,id: 'modx-resource-parent'
            ,value: config.record.parent || 0
            ,formpanel: 'modx-panel-resource'
            ,anchor: '95%'
        },{
            xtype: 'hidden'
            ,name: 'parent'
            ,value: config.record.parent || 0
            ,id: 'modx-resource-parent-hidden'
            ,anchor: '90%'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('resource_menutitle')
            ,description: _('resource_menutitle_help')
            ,name: 'menutitle'
            ,id: 'modx-resource-menutitle'
            ,maxLength: 255
            ,anchor: '90%'
            
        },{
            xtype: 'numberfield'
            ,fieldLabel: _('resource_menuindex')
            ,description: _('resource_menuindex_help')
            ,name: 'menuindex'
            ,id: 'modx-resource-menuindex'
            ,width: 60
            ,value: config.record.menuindex || 0
            
        },{
            xtype: 'checkbox'
            ,fieldLabel: _('resource_hide_from_menus')
            ,description: _('resource_hide_from_menus_help')
            ,name: 'hidemenu'
            ,inputValue: 1
            ,anchor: '75%'
            ,checked: config.record.hidemenu || 0
            
        },{
            xtype: 'hidden'
            ,name: 'type'
            ,value: 'document'
        },{
            xtype: 'hidden'
            ,name: 'context_key'
            ,id: 'modx-resource-context-key'
            ,value: config.record.context_key || 'web'
        },{
            html: MODx.onDocFormRender, border: false
        }]
    });
    
    var va = [];
    va.push({
        xtype: 'checkbox'
        ,fieldLabel: _('resource_folder')
        ,description: _('resource_folder_help')
        ,name: 'isfolder'
        ,id: 'modx-resource-isfolder'
        ,inputValue: 1
        ,checked: config.record.isfolder || 0
    });
    va.push({
        xtype: 'xdatetime'
        ,fieldLabel: _('resource_publishedon')
        ,description: _('resource_publishedon_help')
        ,name: 'publishedon'
        ,id: 'modx-resource-publishedon'
        ,allowBlank: true
        ,dateFormat: MODx.config.manager_date_format
        ,timeFormat: MODx.config.manager_time_format
        ,dateWidth: 120
        ,timeWidth: 120
        ,value: config.record.publishedon
    });
    if (MODx.config.publish_document) {
        va.push({
            xtype: 'xdatetime'
            ,fieldLabel: _('resource_publishdate')
            ,description: _('resource_publishdate_help')
            ,name: 'pub_date'
            ,id: 'modx-resource-pub-date'
            ,dateFormat: MODx.config.manager_date_format
            ,timeFormat: MODx.config.manager_time_format
            ,allowBlank: true
            ,dateWidth: 120
            ,timeWidth: 120
            ,value: config.record.pub_date
        });
    }
    if (MODx.config.publish_document) {
        va.push({
            xtype: 'xdatetime'
            ,fieldLabel: _('resource_unpublishdate')
            ,description: _('resource_unpublishdate_help')
            ,name: 'unpub_date'
            ,id: 'modx-resource-unpub-date'
            ,dateFormat: MODx.config.manager_date_format
            ,timeFormat: MODx.config.manager_time_format
            ,allowBlank: true
            ,dateWidth: 120
            ,timeWidth: 120
            ,value: config.record.unpub_date
        });
    }
    va.push({
        xtype: 'checkbox'
        ,fieldLabel: _('resource_searchable')
        ,description: _('resource_searchable_help')
        ,name: 'searchable'
        ,id: 'modx-resource-searchable'
        ,inputValue: 1
        ,checked: config.record.searchable
    });
    va.push({
        xtype: 'checkbox'
        ,fieldLabel: _('resource_cacheable')
        ,description: _('resource_cacheable_help')
        ,name: 'cacheable'
        ,id: 'modx-resource-cacheable'
        ,inputValue: 1
        ,checked: config.record.cacheable
    });
    va.push({
        xtype: 'checkbox'
        ,fieldLabel: _('resource_syncsite')
        ,description: _('resource_syncsite_help')
        ,name: 'syncsite'
        ,id: 'modx-weblink-syncsite'
        ,inputValue: 1
        ,checked: config.record.syncsite || true
    });
    va.push({
        xtype: 'checkbox'
        ,fieldLabel: _('deleted')
        ,name: 'deleted'
        ,id: 'modx-resource-deleted'
        ,inputValue: 1
        ,checked: config.record.deleted || false
    });
    va.push({
        xtype: 'modx-combo-content-type'
        ,fieldLabel: _('resource_content_type')
        ,description: _('resource_content_type_help')
        ,name: 'content_type'
        ,id: 'modx-resource-content-type'
        ,width: 300
        ,value: config.record.content_type || 1
    });
    va.push({
        xtype: 'modx-combo-content-disposition'
        ,fieldLabel: _('resource_contentdispo')
        ,description: _('resource_contentdispo_help')
        ,name: 'content_dispo'
        ,id: 'modx-resource-content-dispo'
        ,width: 300
        ,value: config.record.content_dispo || 1
    });
    va.push({
        xtype: 'textfield'
        ,fieldLabel: _('class_key')
        ,name: 'class_key'
        ,id: 'modx-resource-class-key'
        ,allowBlank: false
        ,value: config.record.class_key || 'modStaticResource'
        ,width: 250
    });
    it.push({
            id: 'modx-resource-page-settings'
            ,title: _('page_settings')
            ,layout: 'form'
            ,labelWidth: 200
            ,bodyStyle: 'padding: 15px;'
            ,autoHeight: true
            ,defaults: {
                border: false
                ,msgTarget: 'side'
            }
            ,items: va
        });
    it.push({
        xtype: 'modx-panel-resource-tv'
        ,resource: config.resource
        ,class_key: config.record.class_key || 'modStaticResource'
        ,template: config.record.template || MODx.config.default_template
    });
    if (config.access_permissions) {
        it.push({
            id: 'modx-resource-access-permissions'
            ,title: _('access_permissions')
            ,bodyStyle: 'padding: 15px;'
            ,autoHeight: true
            ,layout: 'form'
            ,items: [{
                html: '<p>'+_('resource_access_message')+'</p>'
                ,border: false
            },{
                xtype: 'modx-grid-resource-security'
                ,preventRender: true
                ,resource: config.resource
                ,listeners: {
                    'afteredit': {fn:this.fieldChangeEvent,scope:this}
                }
            }]
        });
    }
    Ext.applyIf(config,{
        url: MODx.config.connectors_url+'resource/index.php'
        ,baseParams: {}
        ,id: 'modx-panel-resource'
        ,class_key: 'modStaticResource'
        ,resource: ''
        ,bodyStyle: ''
        ,defaults: { collapsible: false ,autoHeight: true }
        ,items: [{
            html: '<h2>'+_('static_resource_new')+'</h2>'
            ,id: 'modx-resource-header'
            ,cls: 'modx-page-header'
            ,border: false
        },MODx.getPageStructure(it,{id:'modx-resource-tabs' ,forceLayout: true ,deferredRender: false })]
        ,useLoadingMask: true
        ,listeners: {
            'setup': {fn:this.setup,scope:this}
            ,'beforeSubmit': {fn:this.beforeSubmit,scope:this}
            ,'success': {fn:this.success,scope:this}
        }
    });
    MODx.panel.Static.superclass.constructor.call(this,config);
};
Ext.extend(MODx.panel.Static,MODx.FormPanel,{
    initialized: false
    ,defaultClassKey: 'modStaticResource'
    ,rteLoaded: false
    ,setup: function() {
        this.getForm().setValues(this.config.record);
        if (!Ext.isEmpty(this.config.record.pagetitle)) {
            Ext.getCmp('modx-resource-header').getEl().update('<h2>'+_('static_resource')+': '+this.config.record.pagetitle+'</h2>');
        }
        this.defaultClassKey = this.config.record.class_key || 'modStaticResource';
        if (MODx.config.use_editor == 1 && !this.rteLoaded) {
            if (MODx.loadRTE && !this.rteLoaded) {
                MODx.loadRTE();
            }
            this.rteLoaded = true;
        }
        this.fireEvent('ready',this.config.record);
        this.initialized = true;
    }
    ,beforeSubmit: function(o) {        
        var g = Ext.getCmp('modx-grid-resource-security');
        if (g) { 
            Ext.apply(o.form.baseParams,{
                resource_groups: g.encodeModified()
            });
        }
        return this.fireEvent('save',{
            values: this.getForm().getValues()
            ,stay: MODx.config.stay
        });
    }

    ,success: function(o) {
        var g = Ext.getCmp('modx-grid-resource-security');
        if (g) { g.getStore().commitChanges(); }
        var t = Ext.getCmp('modx-resource-tree');
        
        this.getForm().setValues(o.result.object);
        if (t) {
            var ctx = Ext.getCmp('modx-resource-context-key').getValue();
            var pa = Ext.getCmp('modx-resource-parent-hidden').getValue();
            var v = ctx+'_'+pa;
            var n = t.getNodeById(v);
            n.leaf = false;
            t.refreshNode(v,true);
        }
        if (o.result.object.class_key != this.defaultClassKey && this.config.resource != '' && this.config.resource != 0) {
            location.href = location.href;
        }
        Ext.getCmp('modx-page-update-resource').config.preview_url = o.result.object.preview_url;
    }
    
    
    ,templateWarning: function() {
        var t = Ext.getCmp('modx-resource-template');
        if (!t) { return false; }
        /* if selection isn't the current value (originalValue), then show dialog */
        if(t.getValue() != t.originalValue) {
            Ext.Msg.confirm(_('warning'), _('resource_change_template_confirm'), function(e) {
                if (e == 'yes') {
                    var tvpanel = Ext.getCmp('modx-panel-resource-tv');
                    if(tvpanel && tvpanel.body) {
                        /* update the Template Variables tab */
                        this.tvum = tvpanel.body.getUpdater();
                        this.tvum.update({
                            url: 'index.php?a='+MODx.action['resource/tvs']
                            ,params: {
                                class_key: this.config.record.class_key
                                ,resource: this.config.resource
                                ,template: t.getValue()
                            }
                            ,discardUrl: true
                            ,scripts: true
                            ,nocache: true
                        });
                    }
                    t.originalValue = t.getValue(); /* so that the next reset will work logically */
                } else {
                    t.reset();
                }
            },this);
        }
    }
});
Ext.reg('modx-panel-static',MODx.panel.Static);

/* global accessor for TV dynamic fields */
var triggerDirtyField = function(fld) {
    Ext.getCmp('modx-panel-resource').fieldChangeEvent(fld);
};
MODx.triggerRTEOnChange = function(i) {
    triggerDirtyField(Ext.getCmp('ta'));
};
MODx.fireResourceFormChange = function(f,nv,ov) {
    Ext.getCmp('modx-panel-resource').fireEvent('fieldChange');
};