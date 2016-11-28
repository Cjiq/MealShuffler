import { MealShufflerClientPage } from './app.po';

describe('meal-shuffler-client App', function() {
  let page: MealShufflerClientPage;

  beforeEach(() => {
    page = new MealShufflerClientPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
