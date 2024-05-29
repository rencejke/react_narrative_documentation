import React from 'react';
import IntroMain from './IntroMain';
import { StoreContext } from '../../../../../../../store/StoreContext';
import useQueryData from '../../../../../../custom-hook/useQueryData';
import UIHeader from '../partials/UIHeader';
import UINavigation from '../../../partials/UINavigation';
import UIFooter from '../../../partials/UIFooter';

const UIIntroduction = () => {
  const { store, dispatch } = React.useContext(StoreContext);
  const [info, setInfo] = React.useState(null);

  const {
    isLoading,
    isFetching,
    error,
    data: intro,
  } = useQueryData(
    "/v1/intro",
    "get", // method
    "intro", // key
  );

  return (
    <>
      <UIHeader />
      <div className="flex">
        <UINavigation />
        <IntroMain isLoading={isLoading} isFetching={isFetching} intro={intro} />
      </div>
      <UIFooter />
    </>
  );
};

export default UIIntroduction;
