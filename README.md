# Beaver Rule Logic - Predefined Query Var

I had a need to use an alternative BB Themer Layout assigned to a location if a query parameter was provided and matched a predefined value.

I originally hacked up a solution using `fl_theme_builder_current_page_layouts` and iterating the $layouts object to re-assign a new themer layout, but that seemed pretty hacky, so I was happy to see the new [Rules/Conditional Logic API](https://kb.wpbeaverbuilder.com/article/673-conditional-logic-apis) introduced in BB Themer 1.2

Here is a starting point that works with the query parameter `bbtl`. Just choose the rule, your operator, and assign the value.

Have fun.