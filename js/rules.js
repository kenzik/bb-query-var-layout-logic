var addRuleType = BBLogic.api.addRuleType
var __ = BBLogic.i18n.__

addRuleType( 'bb-query-var-layout-logic/layout-query-var', {
    label: __( 'Predefined Query Var' ),
    category: 'general',
    form: {
      operator: {
        type: 'operator',
        operators: [
          'equals',
          'does_not_equal'
        ],
      },
      var: {
        type: 'string',
        defaultValue: '',
      }
    }
  }
);
